# For when you fly too close to the sun

This is a step-by-step instruction guide for recreating your VM incase you need to start over. This is just a simple list of instructions and commands to quickly install the needed software/make the needed changes.

## Windows Server 2022

### Initial Set-up

1. Download the Windows Server 2022 Evaluation edition iso [here](https://go.microsoft.com/fwlink/p/?LinkID=2195280&clcid=0x409&culture=en-us&country=US)
1. Check "skip unattended installation" and then click next
1. Set the memory to 4096 mb or higher & the processors to 8 or higher and then click next
1. Set the Disk Size to 32GB or higher and then click next > finish
1. Launch the VM
1. Click next > install now
1. Select "Windows Server 2022 Standard Evaluation (Desktop Expirence)" and then click next
1. Accept the EULA and then click next
1. Select Custom, then click next on the next window

While the VM installs the OS, go back to VirtualBox. Click on your VM then select Settings > Network > Adapter 1 and set "Attached to:" to NAT Network

Once the installation is finished, create an administrator password and log in.

### Lab 2
To bring your VM up to spec for lab 2, input the following powershell commands:

```powershell
netsh advfirewall firewall 
add rule name="Allow ICMPv4 Requests" protocol=icmpv4:8,any dir=in action=allow
```
Press Ctrl+C, then ping your Linux VM to make sure everything is set up successfully.

## Ubuntu VM

### Initial Set-Up

1. Download the Ubuntu [here](https://ubuntu.com/download/desktop/thank-you?version=22.04.4&architecture=amd64)
1. Check "skip unattended installation" and then click next
1. Set the memory to 4096 mb or higher & the processors to 4 or higher and then click next
1. Set the Disk Size to 20GB or higher and then click next > finish
1. Launch the VM & follow the instructions on screen to begin setup.

While the VM installs the OS, go back to VirtualBox. Click on your VM then select Settings > Network > Adapter 1 and set "Attached to:" to NAT Network

Once the installation is finished, create an user password and log in. Once you have logged in you need to elevate your account to admin. In order to do that you open a terminal and type in the following code.
```bash
su root
nano /etc/sudoers
```
then add the following text at the bottom next to the admin user:
```
<username> ALL=(ALL)   ALL
```

### Lab 2

To bring your VM up to spec for lab 2, input the following bash commands:

> [!WARNING]
> This section is still-in progress! Come back later!

<!-- TODO: Complete Section -->