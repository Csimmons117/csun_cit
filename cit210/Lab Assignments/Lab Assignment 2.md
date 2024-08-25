# Lab 2: Linux Directory Structure, Linux and Windows File Server, Windows Server Disk and Storage

[Canvas Link](https://canvas.csun.edu/courses/150468/assignments/1855194)

[PDF Download](https://canvas.csun.edu/courses/150468/files/24362831?wrap=1)

> [!IMPORTANT]
> For ease of understanding, I've changed Task 2 in the PDF to 2.1.

### Table of Contents
[Deliverables](#deliverables)

[Task 1: Explore Linux Commands](#task-1-explore-linux-commands)

[Task 2.1: Bash Shell Programming](#task-21-bash-shell-programming)

[Task 2.2: Troubleshooting Bash Scripts](#task-22-troubleshooting-bash-scripts)

[Task 3: Configure File Server Connecting Windows and Linux (Samba)](#task-3-configure-file-server-connecting-windows-and-linux-samba)

[Task 4: Disks and Volumes (Windows Server)](#task-4-disks-and-volumes-windows-server)

## Deliverables

At the end of this assignment, you will be turning in a Word doc containing the following:

**TASK 1** <br>
- The output of the following bash commands:
```bash
echo "A cow is grazing in the summer" > linuxtest3.txt
echo "in the middle of June when all the" >> linuxtest3.txt
echo "other cows are out in the field." >> linuxtest3.txt
cat linuxtest3.txt | sed 's/cow/computer/' > linuxtest4.txt
```

**TASK 1.2** <br>
- The output of the following bash commands:
    - `ls -a > listing`
    - `cat listing | less`

**TASK 1.4** <br>
- The output of the following bash commands:
    - `which chmod`
    - `where is chmod`

**TASK 1.5** <br>
- The output of the following bash commands:
```bash
echo "test file" > working.txt
ls -l working.txt
chmod 444 working.txt
ls -l working.txt
chmod o+w working.txt
ls -l working.txt
chmod u-r working.txt
ls -l working.txt
chmod 777 working.txt
ls -l working.txt
```
- An explanation of the following bash commands:
    - `chmod o+w working.txt`
    - `chmod u-r working.txt`
    - `chmod 777 working.txt`

**TASK 1.6** <br>
- Explain the output of the following commands:
    - `dmesg | more`
    - `passwd`
    - `date`
    - `hostname`
    - `arch`
    - `uname -a`
    - `uptime`
    - `whoami`
    - `who`
    - `id`
    - `finger`
    - `wc /etc/passwd`
    - `top`
    - `echo $SHELL`
    - `clear`
    - `history`
    - `head /etc/passwd`
    - `tail /etc/passwd`
    - `more /etc/passwd`
    - `less /etc/passwd`
    - `lost`

**TASK 2** <br>
- Summarize the information in the following directories:
    - /bin
    - /usr/bin
    - /sbin
    - /tmp
    - /boot
- List the devices in /dev
- A screenshot of the contents of the following files (use `cat` to display file contents):
    - /proc/interrupts
    - /proc/devices
    - /proc/cpuinfo
    - /proc/meminfo
    - /proc/uptime
- A screenshot of your login details (use grep)

**TASK 2.1.1-2.1.6 & 2.2.1-2.2.3** <br>
- Screenshots of the successful script execution for each task

**TASK 3**
- Screenshot of a successful connection between the Windows Server and Samba share.

**TASK 4**
- Screenshot of the following:
    - A successful conversion of an MBR partition to a GPT partition
    - Your created VHD drive
    - Your shared drive
    - Your server pool

## Prerequesites

In order to complete this lab, you will need to have pre-configured a Linux and Windows Server VM. These instructions are written with the assumption that you have the same Windows Server & Linux machines you used for the last lab. 

> [!CAUTION]
> If you have to set up a new VM for this lab please go see [Icarus](Icarus.md), which is a reference file I've created that should help with set-up.

## Task 1: Explore Linux Commands 

The Lab Assignment on canvas gives step-by-step instructions for how to complete this task so I won't cover it here.

## Task 2: 

Questions 1-3 in task 2 are word questions so I won't answer them here. For question 4, enter the following bash command into your terminal:
```bash
grep '^<username>:' /etc/passwd
```

## Task 2.1: Bash Shell Programming

Launch your Linux VM and open the terminal. Run the following commands to create a folder in your home directory and move into it:
```bash
mkdir Lab01
ls #Always verify that the folder was created successfully before moving on
cd Lab01
```

### 2.1.1 Creating a Bash Script

Once you are in the Lab01 folder, you need to create your first script. First, you want to launch the nano editor by typing `nano hello.sh`. <br>
This will create a file called hello.sh and open the nano editor with that file. Once you have nano open, type the following commands:
```bash
#!/bin/bash
echo Hello World
```
Save and exit your work by pressing Ctrl+X, then Y, then Enter.

Now that your script is created, you need to launch it. That means first giving the file execute permissions. In the linux terminal, type out the following commands:
```bash
chmod u+x hello.sh
ls -la hello.sh
```
If the command was successful, you should see the output start with `-rwxrw-r-- 1`. That means that the file now can be executed by the owner. 

Run the script by typing `./hello.sh`. You should get an output saying `Hello world`.

### 2.1.2 Creating a Simple Addition Script

For this task, we will be creating a simple bash script that can add two numbers together.

Open nano again, this time creating a file called `calc.sh`. This time, put the following code inside:
```bash
#!/bin/bash
#a simple script
echo "$1 + $2 = $(($1 + $2))"
```
Save and exit from nano, give the file execute permissions, and launch it. You should get an error. That's because this script requires inputs. Try it again using the following command:
```bash
./calc.sh 2 2
```
You should get the following output:
```
2 + 2 = 4
```
When you are scripting with bash, you can push inputs to the function by putting them after the file name and definging them in the script by using `$`. Bash is an interpretive langauge, so it will read them automatically as strings, but depending on the context it will automatically convert them to numbers or other data types as needed.

Feel free to test the code with other numbers to see it's limits.

### 2.1.3 Creating a File Creation Script

In this exercise you are going to be creating a script that creates a file that is specified at runtime. We are going to do this using the `touch` command, which creates a file in Linux.

Open nano through the Linux Terminal again, this time creating a file called `myshell.sh`. Put the following code in the file:
```bash
#!/bin/bash
touch $1
ls > $1
```
Save and exit nano, give the file execute permissions, and then run it/verify the output using the following commands:
```bash
./myshell.sh testfile
ls
```
Make sure testfile is shows up in the file list and then check the contents of the file using `cat`. You should see the following output:
```
calc.sh
hello.sh
myshell.sh
testfile
```
Test the script again, this time creating a file called `testfile1`.

### 2.1.4 Creating a Date File Script

In this exercise you are going to be creating a file whose name will be today's date in the format of ddmmyy.dat.

Open nano again, creating a file called `date.sh`. Put the following code into the file:
```bash
#!/bin/bash
touch `date +%d%b%y`.dat
FILENAME=`date +%d%b%y`.dat
touch $FILENAME
```

In this script, it is actually creating the file twice, using two seperate ways. In the first one, it is directly creating a file using touch and naming it by pulling the day(`%d`), month(`%b`), and year(`%y`) and combining them into a name. In the second, it is creating a variable called `FILENAME` that is contains a string that was created by pulling the day(`%d`), month(`%b`), and year(`%y`) and combining them. It them creates a file and names it using the string in FILENAME.

Save and exit from Nano, then run the script. Check the directory to make sure the file is created.

### 2.1.5: Adding Output & Reading Additional Inputs

In this exercise, you will be creating a file like you did in 2.1.3, but this time you will be adding two additional features. The first will be adding the ability to ask the user to input additional variables, and the second will be to echo back when the file is successfully created.

Open nano yet again, creating a file called `creafile.sh`. Input the following code:
```bash
#!/bin/bash
echo 'enter a file name:'
read FILENAME
touch $FILENAME
echo "$FILENAME has been created"
```

In this script, it is asking the user to add an additional input, then using the `read` command to create a variable called `FILENAME` containing a string with the additional input. Then it creates a file using said string and echos back to the command line that it has been created.

Save and exit from Nano. Run the script using whatever file name you want. Make sure to double check that the script successfully created the file.

### 2.1.6: For loops

In this exercise, you will be using a for loop to read and echo all the users in a list of users. To do this we will create two files, `userlist` and `userscript.sh`.

First, open nano and create the file `userlist`. Input the following list of users:
```
moe
larry
curly
binny
```
Save and exit from Nano, then open it again and create `userscript.sh`. Input the following code:
```bash
#!/bin/bash
for TheUSER in $(cat userlist)
do
    echo The user is $TheUSER
done
```

In this code, it creates a variable called `TheUSER` that stores a string of whatever the current line is in userlist. It then echoes the string, and then checks if there is a line below the line it echoed. If so, it runs again, storing that line in `TheUSER`.

Save and exit from nano, then run the script. Make sure you also run `cat userlist` to show that you created that file correctly as well.

## Task 2.2: Troubleshooting Bash Scripts

For this task, you will be given bash scripts that have errors in them. 

I will have the correct code included in "details" but I suggest you try to solve the problems on your own beforehand, so you have a better understanding of the code.

### 2.2.1: > and >>

In this exercise, you are trying to create a script that will create an input file, then use the contents of that file to create two more files. 

Open nano and create a file called `inputoutput.sh`.

Fix the errors in this code and then input the correct code into the script:
```
#!/bin/bash
mkir test
cdtst
echothis is file1" > file1
sed's/1/2/ <file1 > file2
cat > file3 << EOF
this is file3
EOF
cdc..
lst test >filetest
```

If you can't solve it, here is the corrected code and an explanation:
<details>

```bash
#!/bin/bash
mkdir test
cd test
echo "this is file 1" > file1
sed 's/1/2/' < file1 > file2
cat > file3 << EOF
this is file3
EOF
cd ..
ls test > filetest
```

In this code, you are doing the following:
- creating a directory called test and switching into it
- creating a file called "file1"
- redirecting the output of the command `echo "this is file 1"` into file1
- creating a file called "file2"
- copying the contents of file1 onto file2 while using the stream editor `sed` command to change all instances of the character "1" to "2"
- creating a file called "file3"
- creating a here document(temporary file) called EOF containing the string "this is file3"
- appends the output of the command `cat EOF` into file3
- switching back to the original directory
- creating a file called "filetest"
- redirecting the output of `ls test` into filetest
</details>

Save and exit from nano, and make sure the script works.

### 2.2.2: Using the Read & Delete Commands

In this exercise, you are trying to create a script that deletes a file that the user specifies during execution. 

Open nano again, this time creating a file called `remover.sh`.

Here is the incorrect code. Find and fix the errors in it, then input the corrected code into the editor:
```
!/bin/bash
echo 'Please enter the name of the file to delete:'
readlinedelfiles
rmove $delfile
echo $delfile Deleted
```
If you can't solve it, here is the corrected code and an explanation:
<details>

```bash
#!/bin/bash
echo "Please enter the name of the file to be deleted:"
read delfile
rm $delfile
echo $delfile deleted
```
In this code you are doing the following:
- echoing "Please enter the name of the file to be deleted" to the CLI
- using the `read` command to take what the user inputed and store it in the newly created variable "delfile"
- using the `rm` command to remove the file with the name stored in delfile
- echoing that the file was deleted to the CLI
</details>

Save and exit from nano. Create a file called "deleteme" and then run the script to delete said file. Make sure you use the `ls` command to verify that the file was created & then deleted.

### 2.2.3: Adding Users

In this exercise, you are trying to create a script that will create usernames and password that are defined during execution.

Open nano and create a file called `themkuser.sh`.

Fix the below code and insert it into the editor:
```
#!/bin/bash
#
#Themkuser script was written by Dhillon
# to make my life a little easier
#
print "This program will add a new user.""
print "Type exit to quit"
echo -nn "Enter a new username:"
read name
while [$names != "exit"] as ;
does
usrad -d /home/$name -s/bin/bash $name
passwordd $name
echo -n "Type exit to quit or Enter a new username
readnaeme
do
exit
```
If you don't know how to solve it, here is the correct code:
<details>

```bash
#!/bin/bash
echo "This program will add a new user."
echo "Type 'exit' to quit"

echo -n "Enter a new username: "
read name

if [ "$name" == "exit" ]; then
    exit
fi

while true; do
    useradd -d "/home/$name" -s "/bin/bash" "$name"
    passwd "$name"

    echo -n "Type 'exit' to quit or Enter a new username: "
    read name
    if [ "$name" == "exit" ]; then
        exit
    fi
done
```
</details>
Save & exit nano, then run the script. Using the script, create two users with the following usernames and passwords:

```
Username: labuser1
Password: N0rthridge

Username: labuser2
Password: 3SUNLabs
```

## Task 3: Configure File Server Connecting Windows and Linux (Samba)

Samba is a software implementation of the SMB protocol that allows Windows clients to connect to non-windows clients for the purposes of file-sharing and printing. In this task, we are going to be using it to set up a file-sharing server on our Linux VM that we will then connect to on our Windows VM.

Want to learn more about Samba? Go to their website [here](https://www.samba.org/samba/what_is_samba.html).

### Step 1: Installing Samba

1. Go to virtual box and click on your linux VM
1. Go to settings > network > adapter 1 and make sure it is set to NAT
3. Open the terminal on your linux machine and run the following commands:
```bash
sudo apt update
sudo apt upgrade -y
sudo apt install samba -y
whereis samba
```
If you have successfully installed samba, you should see the below output:
```
samba: /usr/sbin/samba /usr/lib/x86_64-linux-gnu/samba /etc/samba /usr/share/samba /usr/share/man/man8/samba.8.gz /usr/share/man/man7/samba.7.gz
```
Once Samba is installed, go back to the adapter 1 settings and switch it back to the NAT Network.

### Step 2: Configuring Samba

In order to configure Samba, we first need to create a directory for it to share. Run the below commands in your Linux terminal:
```bash
mkdir /home/<username>/sambashare/
cd /home/<username>
ls # always verify that the folder is created before continuing
```
In order to share the folder, we need to modify the Samba .conf file. To do that, open it in nano using the below command:
```bash
sudo nano /etc/samba/smb.conf
```
At the bottom of the .conf file, add the below text:
```
[sambashare]
    comment = Samba File Server
    path = /home/<username>/sambashare
    read only = no
    browsable = yes
```
Save and exit from Nano, then run the below commands to finalize the samba configuration:
```bash
sudo service smbd restart # restarts the samba service
sudo ufw allow samba # configures the firewall to allow samba traffic
```

### Step 3: Connecting to Samba

Now that Samba is configured, we need to set up a password for it, and connect to it using our windows computer.

#### Creating a Samba Password

Samba doesn't use the same password as a regular user, but a special samba password. In the Linux terminal, run the below command and follow the prompt:
```bash
sudo smbpasswd -a <username>
```
> [!TIP]
> <username> doesn't have to be your username. You can use one of the accounts you created in [Exercise 2.2.3](#2.2.3:-Adding-Users). You just need to make sure to promote the account to an super user account beforehand, otherwise it won't work.

#### Connecting your Windows Server to Samba

> [!WARNING]
> This section requires use of the Windows GUI. If you have the CLI-only version of Windows Server 2022, these instructions will not be able to help you.

> [!NOTE]
> In order to connect your Windows Server to Samba you will need the IP address for your Linux vm.

Once you have your Samba password created, switch to your Windows Server VM and ping the Linux server to verify connectivity. Once you have verified connectivity, do the following:

1. Open File Explorer and go to "This PC"
1. Select Computer > Map Network Drive
1. Make sure the folder is `\\<linuxVM-IP>\sambashare` and both "Reconnect at sign-in" & "Connect using different credentials" are checked, and then click finish
1. When prompted, enter the samba log-in credentials you created

Open the Network drive to confirm you are able to access it.

## Task 4: Disks and Volumes (Windows Server)

### Adding a Second Disk

In order to convert the disk, we first need to create a second disk to play around with. In order to complete that, you need to complete the following steps:

1. Tab over to Virtual Box and select your Windows VM and then settings.
1. Go to storage > Controller: SATA > Adds hard disk > Create
1. Select Virtual Hard Disk then click next & next again
1. Select a minimum of 4 GB for the size and select finish
1. Select the new VHD from the list and click Choose

### Converting a Disk from MBR to GPT (GUI)

> [!WARNING]
> This section requires use of the Windows GUI. If you are using the CLI only version of Windows Server 2022, skip to [here](#Converting%20a%20Disk%20from%20MBR%20to%20GPT%20(Powershell)).

Windows uses two styles for it's partitions, Master Boot Record (MBR), or GUID Partition Table (GPT). MBR is an older format that was first introduced in the 1980s with IBM. It's the default style on most version of Windows, but it is outdated because you can only make four paritions on it, and the total disk space can only be 2TB. In order to fix those shortcomings, GPT was created in the early 2000s. 

For more information about MBR & GPT paritions, check out the link [here](https://www.easeus.com/partition-master/mbr-vs-gpt.html)

In order to convert your new disk to GPT, complete the following steps:
1. Right-Click on the start button and select "Disk Management"
1. Right-Click on disk 1 and select "Convert to GPT Disk"

You have now successfully converted your disk to GPT.

### Converting a Disk from MBR to GPT (Powershell)

> [!NOTE]
> If you completed the instructions in the above section, skip this section.

Windows uses two styles for it's partitions, Master Boot Record (MBR), or GUID Partition Table (GPT). MBR is an older format that was first introduced in the 1980s with IBM. It's the default style on most version of Windows, but it is outdated because you can only make four paritions on it, and the total disk space can only be 2TB. In order to fix those shortcomings, GPT was created in the early 2000s. 

For more information about MBR & GPT paritions, check out the link [here](https://www.easeus.com/partition-master/mbr-vs-gpt.html)

In order to convert your new disk to GPT, launch powershell as an admin and run the following commands:
```powershell
diskpart
list disk
select disk 1
clean
convert gpt
```
You have now successfully converted your disk to GPT.

### Creating VHD & VHDX Files

> [!WARNING]
> This section requires use of the Windows GUI.

Now that our disk is coverted to GPT, we can create Virtual Hard Disks on it. Virtual Hard Disks are a way to emulate HDs for VMs. Currently Windows Hyper-V supports two types of Virtual Hard Drives. VHD, and VHD-Extended (VHDX). While VHDX is the more modern and useful of the two, for this exercise we are going to be creating VHD files.

In order to create a VHD, we are going to launch Server Manager. Once it is launched, do the following:
1. Select tools > computer management > disk management
1. Right click on the unallocated space on Disk 1 and select "Create Simple Volume"
1. Make sure the drive letter is E and then click next
1. Rename the Volume Label to "Lab Volume", click next, and then click finish 
1. Making sure the new Volume is selected, go to the top bar and select actions > create VHD
1. Make sure the following values are set in the pop-up window and then click okay:
    * Location: E:\Lab02VHD.vhd
    * Virtual Hard Disk Size: 1 GB
    * Virtual Hard Disk Format: VHD
    * Virtual Hard Disk Type: Dynamically expanding
1. Right click on the new disk (disk 2) and then select Initialize Disk
1. Select GPT and then select ok
1. Right click on the unallocated space in disk 2 and select "New simple volume"
1. Select next > next
1. Assign the drive letter F & select next
1. Rename the Volume label to "Lab VHD" and then select next > finish

### Creating SMB & NFS Shares

> [!WARNING]
> This section requires use of the Windows GUI.

As you learned in Task 3, the SMB protocol is a protocol used to share files between Windows systems or between Windows and non-Windows systems for file storage or printing. Another protocol is the NFS, or Network File System Protocol. For this section, we will be creating an SMB share.

In order to create an SMB share, you will need to launch Server Manager and do the following:
1. Select File & Storage Services > Volumes > E
1. Scroll down to Shares and select "Start the Add Roles and Features Wizard"
1. Once the window pops up, click next > next > install and wait for the window to finish installing.
1. Once it's finished, go back to shares and select tasks > new share
1. Make sure "SMB Share - Quick" is selected and then select next
1. Select E: and then click next
1. Named the share "LabShare", then click next > next > next > create

### Server Storage

> [!WARNING]
> This section is still-in progress! Come back later!.
> ![construct-image](https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.mHarBb6inKIqSYfF_n0wMAHaFP%26pid%3DApi&f=1&ipt=05f131b6198dc7595813ceb0c96972b46cd11305791ed0fdf802b6fe4a432071&ipo=images)

<!-- Commenting out these instructions since I'm not sure if they work or not. Wasn't able to get it working.

#### Creating a new Disk

In order to create a Storage Pool. Create a new physical disk in Virtual Box the same way you did earlier in Task 4 but this time make it 10GB. Make sure you initialize it in Disk Management, but leave it as unallocated.

#### Creating Storage Pool
1. Go to File and Storage Services > Storage Pools > Tasks > New Storage Pool
1. Click next
1. 
-->
