# Lab Assignment 1 : Deploying and Managing Linux and Windows Operating Systems
## Deliverables

At the end of this assignement, you should be turning in a word doc with the following:
- A screenshot of the VirtualBox homepage with your configured Linux and Windows Server VMs.
- A screenshot of a your Linux machine successfully pinging the Windows Server and vice-versa.
- The IP of your Linux Machine
- A screenshot of the Linux SSH fingerprint authentication prompt (and you typing yes)
- A screenshot of the file you created in the Windows Server.

## Task 1 & 2: Installing and Configuring the VMs

Going to leave this section blank for now since I'm assuming everyone knows how to configure virtual box but here are the links to download the needed vms:
- Windows Server 2022 (Evaluation edition) > [.iso](https://go.microsoft.com/fwlink/p/?LinkID=2195280&clcid=0x409&culture=en-us&country=US)
- Ubuntu > [.iso](https://ubuntu.com/download/desktop/thank-you?version=22.04.4&architecture=amd64) 

> [!NOTE]
> You only need to configure a Windows Server VM and a Linux machine, you don't need to configure a Windows 10/11 machine.

## Task 3: Configuring IPv4 Addresses & Connecting Linux & Windows Machines

### Creating NAT Network

In order to connect the VMs together, you need to make sure they are all on the same network. The first step to doing that is creating a NAT Network. 
1. Open Virtual Box
1. Hover over the box labelled "Tools" and click on the icon with three dots.
1. Select Network>NAT Network>Create
1. Create a network with the following options:
	* Name: CIT210L
	* IPv4 Prefix: 192.168.10.0/24
	* Enable DHCP
1. Open the settings on Virtual Box for both the Linux machine and Windows Server and go to Settings>Network>Adapter 1 and set "Attached to:" to NAT Network.

### Pinging Linux & Windows Machines

Before you can ping the windows server, you need to create a rule to allow ICMP (Internet Control Message Protocols) ping requests to go through. In order to do that, you need to open the powershell command line as an administrator and type in the following commands: 

> [!IMPORTANT]
> Whenever you access powershell to make changes to the system, make sure you launch it as an administrator (if you installed Windows Server as CLI-only it will auto-launch powershell as an admin)
```powershell
netsh 
advfirewall firewall 
add rule name="Allow ICMPv4 Requests" protocol=icmpv4:8,any dir=in action=allow
```
If you entered the rule correctly, the machine will respond with `OK.`

When you are done using netsh, press ^C to return to the normal powershell line.

Once you have created the rule for the Windows Server, you can get the ip addresses of both machines and ping them to verify connectivity.

#### Pinging the Linux Machine from Windows Server

Open the linux terminal and run the following commands: <br>
```bash
sudo apt install net-tools
ifconfig
``` 
If you get an error from Linux saying that you are not in the root folder directory, run the below commands, then run the ones above again.
```bash
su # su stands for substitute user, which switches the user account in the terminal. Leaving it blank causes it to default to root
# when it prompts you for the root password enter your user password
visudo
```
At the end of the file, put the following command:
```<user> ALL=(ALL) ALL```
Press Ctrl+X and then Y to exit the editor, then type the following:
```bash
su <your username> # switches you back to your user account, since you don't want to stay in root
```
If `ifconfig` runs successfully, you should see an output that looks something like this:
```
eth0: flags=4163<UP,BROADCAST,RUNNING,MULTICAST>  mtu 1500
        inet 172.29.194.47  netmask 255.255.240.0  broadcast 172.29.207.255
        inet6 fe80::215:5dff:fe12:afa0  prefixlen 64  scopeid 0x20<link>
        ether 00:15:5d:12:af:a0  txqueuelen 1000  (Ethernet)
        RX packets 462  bytes 541767 (541.7 KB)
        RX errors 0  dropped 0  overruns 0  frame 0
        TX packets 296  bytes 25929 (25.9 KB)
        TX errors 0  dropped 0 overruns 0  carrier 0  collisions 0

lo: flags=73<UP,LOOPBACK,RUNNING>  mtu 65536
        inet 127.0.0.1  netmask 255.0.0.0
        inet6 ::1  prefixlen 128  scopeid 0x10<host>
        loop  txqueuelen 1000  (Local Loopback)
        RX packets 9  bytes 1720 (1.7 KB)
        RX errors 0  dropped 0  overruns 0  frame 0
        TX packets 9  bytes 1720 (1.7 KB)
        TX errors 0  dropped 0 overruns 0  carrier 0  collisions 0
```
Record the inet address, that is your Linux VMs IPv4 address.

Once you have the IPv4 address, launch the powershell command line on the Windows Server VM and then type in the following command:
```powershell
ping <Linux IP address>
```

#### Pinging the Windows Server from the Linux Machine

Open the powershell terminal on the Windows server and type in the following command to get the IP address for the VM:
```powershell
ipconfig
```

Record the IPv4 address and then launch the terminal on the Linux VM machine. Run the following command on the terminal
```bash
ping -c 4 <Windows Server IP address>
# ping on Linux will run continously until you press ^C unless you specify how many times to ping by passing the -c arguement
# in this instance, I've instructed it to run 4 times.
```

## Task 4: Remote access using SSH

In order to use the Secure Shell (SSH) to connect to the windows machine remotely, you need to install the OpenSSH software.

### Installing OpenSSH Client onto Linux

Before installing any software, you want to make sure your Ubuntu is up to date. Open the linux terminal and run the following commands: 
```bash
sudo apt-get update
sudo apt-get upgrade
```
Now that it's up to date, run the below command to install the OpenSSH Client.
```bash
sudo apt install openssh-client
```

### Installing OpenSSH Server on Windows Server

To install the OpenSSH Server software, you need to open powershell and type in the following commands:
```powershell
Add-WindowsCapability -Online -Name OpenSSH.Client~~~~0.0.1.0
Add-WindowsCapability -Online -Name OpenSSH.Server~~~~0.0.1.0
Start-Service sshd
Set-Service sshd -StartupType 'Automatic'
Get-WindowsCapability -Online | Where-Object Name -like 'OpenSSH*'
```
Once you run all of those commands correctly, you should see the following output in your terminal.
```
Name : OpenSSH.Client~~~~0.0.1.0
State : Installed

Name : OpenSSH.Server~~~~0.0.1.0
State : Installed
```

Now that OpenSSH is installed on both the Linux & Windows Server VMs, it's time to connect them.

### Connecting through SSH

Open the linux terminal and type in the following command:
```bash
ssh <Windows username>@<Windows Server IP>
```
When the prompt about fingerprints comes up, type yes. If everything goes well, you should see the below msg appear on your screen:
```
Microsoft Windows [Version ...]
```
You are now remoted into the Windows Server. Now you need to create a file to prove that you were able to successfully connect. In the current window, type the following batch commands:
```batch
cd Documents
type nul > <LASTNAME>-LAB1-ssh.txt
```
Then switch over to the Windows Server VM and type in the following powershell commands to verify that the file was created successfully:
```powershell
cd Documents
dir
```