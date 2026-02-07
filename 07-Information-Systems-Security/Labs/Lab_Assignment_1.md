```
CIT425/LInfo System Security(Lab Assignment 1)
```
# Lab 1: Using Zenmap to Perform Basic Reconnaissance, Performing a

# Vulnerability Assessment ( 10 0 Points)

**_(IMP NOTE: This Assignment will be graded on Tasks Performed by Student (installation of Various
Virtual OS, Installing configuringapplications) Take Screenshots whenever complete the task or even
you are getting error or any other issues. It is highly recommended to complete tasks. If for some
reason Student is not able to complete the complete the tasks partial grades will be awarded.)_**

**_Deliverables (Screenshots of Completed Tasks)_**

**Task 1. Install and Configure Windows 10 /11 Virtual Machine.**

**Task 2. Install and Configure Windows Server 2019/2022/2025 Virtual Machine.**

**Task 3. Install and Configure Kali Linux Virtual Machine**

**Task 4. Tools and Software The following software and/or utilities are required to complete this lab.**

- **FileZilla**
- **NetWitness Investigator**
- **OpenVAS**
- **PuTTY**
- **Tftpd**
- **Wireshark**
- **Zenmap**

# Task 5.(NetWitness Investigator) (15 Points)

1.Make a screen capture showing the Wireshark traffic that you captured and paste it into your
Lab Report file.


2.Close the Wireshark window.

3. When prompted, click Stop and Quit without Saving to close the application without saving
the packet capture.
4. Double-click the **NetWitness Investigator** icon on the vWorkstation desktop to open the
application.
5. NetWitness Investigator allows analysts to view and analyze packets collected by applications
like Wireshark. While Wireshark offers a deep-dive into individual packets, NetWitness offers a
high-level view that can be stored and compared with newer packet captures to help identify
any new threats or problems.
6. Maximize the NetWitness Investigator window.
7. Double-click the Demo Collection to see how NetWitness Investigator collects and
presents traffic types and security events.

Notice that NetWitness Investigator has identified three items that might be a possible threat
to the network (in the Alerts report), specified the source and destination IP addresses in this
collection, and even recognized the user accounts.

8. Close the NetWitness Investigator window.
9. Double-click the OpenVAS icon on the vWorkstation desktop to open the application.


**_Note: OpenVAS performs remote scans and audits of Unix, Windows, and network
infrastructures and can perform a network discovery of devices, operating systems,
applications, databases, and services running on those devices. It will take five minutes before
OpenVAS is ready to use._**

10. In the IP address or hostname box at the right of the window, type **_IP address_** of windows
machine and click Start Scan to run a basic security scan.

# Task 6: Using Zenmap to Perform Basic Reconnaissance(15 Points)

1. Double-click the Nmap-Zenmap GUI icon on the vWorkstation desktop to open the
application.

The Zenmap window opens with two drop-down menus labeled Target and Profile.

The Target field allows you to specify or select the networks or subnets you want to connect
to.

The Profile field indicates the types of scans you can perform.

2. From the Target drop-down menu, select IP address of windows machine, the subnet address
for this lab.
3. From the Profile drop-down menu, select Ping scan and click Scan. The Command box
displays the syntax for the Nmap command. These commands also can be typed manually. The
results of the scan will start filling the Nmap Output tab. This scan returns basic information
about host availability and the MAC address. You will need this data to complete the
deliverables for this lab. The scan is completed when the final line of the output reads Nmap
done.


4. **Expand** the **Profile drown-down menu** to see the complete list of scans that Zenmap can
perform.
5. To gather more detailed data, **select Intense Scan** from the Profile drop-down menu and
**click Scan**.
6. **Click Scan > Save Scan** on the Zenmap menu to save the scan results.
7. In the Choose a scan to save dialog box, **select nmap –T4 –A –v 172.30.0.0/24 (Subnet of
target machine)** (the command line for the intense scan) from the drop-down menu and **click
Save**.
8. In the Save Scan dialog box, navigate to the **Saving folder**. In the Name box, **highlight** the
existing text ( **.xml** ), **type** **_yourname_** **_IntenseScan** in the Name box, replacing _yourname_ with
your own name, and **click Save**.
**9. Use the scrollbar** to review the results of the scan.
The Intense scan is actually a collection of several individual tests. The Nmap Output tab shows
the raw output, including the name of each scan and its results (for example, the first scan in
the report, the ARP Ping Scan, found 255 hosts on the subnet.) Review the output to identify
each test performed by Zenmap.


10. **Click** the **Ports/Hosts tab** and review the data, being sure to look for the information
described in the following table. Make note of the results; you will use this data to complete
the deliverables for this lab.

**_Note:
In the next steps, you will create a picture of the scanned network using
the tools in the Topology tab. If you have not already done so, maximize
the Zenmap window to make this task easier._**

11. **Click** the **Topology tab**.
This tab displays a bubble chart of all the IP hosts discovered during the scan. In this report, the
bubble chart shows the relative size and connection type of all discovered hosts.


# Task 7: Lab Assessment Questions & Answers (20 Points)

1. What is promiscuous mode?
2. How does Wireshark differ from NetWitness Investigator?
3. What is the command line syntax for running an Intense Scan with Zenmap on a target
subnet of 172.30.0.0/24?
4. Name at least five different scans that may be performed with Zenmap.
5. How many different tests (i.e., scripts) did your Intense Scan perform?
6. Based on your interpretation of the Intense Scan, describe the purpose/results of each
tests script performed during the report.
7. How many total IP hosts did Zenmap find on the network?

8.Review the ZeNmap GUI (Nmap) network discovery and vulnerability assessment scan
report and identify the following:

- What was the date and time stamp of the Nmap host scan?
- How many total tests or scripts ran during the scan?
- A SYN stealth scan discovers all open ports on the targeted host. How many ports are open
on the targeted host?
- What ports are open on the targeted host?
- What services/applications are on the targeted host?
- What is the MAC layer address of the targeted host? • What OS is loaded on the targeted
host?
- How many router hops away is the targeted host?
- Does the ZeNmap GUI (Nmap) scan report provide any information regarding to risk,
threats, or vulnerabilities found?
- What must you do to confirm or verify if the identified OS, software, application has the
latest release and/or software updates and patches?


# Task 8: Performing a Vulnerability Assessment(10 Points)

Vulnerability scanning is the process of using automated tools to discover, and identify,
vulnerabilities in a network. Vulnerability scanners come in many different forms, from simple
scripts that identify a single vulnerability, to complex commercial software engines that scan for
thousands of them. Vulnerability scans can generate a great deal of traffic and, in some cases,
can even result in denial of service conditions on many network devices, so caution must be
exercised before making use of mass vulnerability scanners on a penetration test.

Upon completing this Task, you will be able to:
Identify risks, threats, and vulnerabilities in an IP network infrastructure using Zenmap to
perform an IP host, port, and services scan
Perform a vulnerability assessment scan on a targeted IP subnetwork using OpenVAS
Compare the results of the Zenmap scan with a OpenVAS vulnerability assessment scan
Assess the findings of the vulnerability assessment scan and identify critical vulnerabilities
Make recommendations for mitigating the identified risks, threats, and vulnerabilities as
described on the CVE database listing

**_Scanning a Network with Zenmap_**

1. **Double-click** the **Nmap-Zenmap GUI icon** on the vWorkstation desktop to open the Zenmap.

Zenmap is a graphical interface for Nmap, a port scanning tool that can quickly identify hosts
and detect what operating system and services are running on them, and all without privileged
access. Zenmap, and similar tools, are typically used during the scanning and vulnerability
phase of the ethical hacking process.

2. In the Command box, of Zenmap (search and type nmap command with option) to scan the
or exclude IP address.

**_Sample command
type nmap –sn --exclude 172.30.0.2 172.30.0.0/24_** _and_ **_press Enter_**_._

This command will manually execute a Ping scan (-sn) on all hosts on the 172.30.0.0/
subnet except the vWorkstation (172.30.0.2). The scan found five hosts on the
172.30.0.0/24 subnet.


3. **Click** the **Host Details tab**.
The Ping scan confirms that the machine is available, but can’t identify ports, operating
systems, or services. The host icon in the Host Details tab matches the one in the OS column of
the left pane. These icons indicate that the scan was unable to determine the operating system
(OS) of the host.


4. **Click** the **Nmap Output tab** to return to the complete scan results.
5. In the Command box, **highlight –sn** , **type –sS** and **press Enter** to overwrite the existing
command and begin a SYN scan of the subnet.
The SYN scan is a form of TCP scanning that is less intrusive on the target host. The scanner,
Zenmap, can identify open ports without completing a TCP handshake, which might be noticed
by network administrators.
6. **Click** the first host IP, **IP address** to select it, and **click** the **Ports/Host tab** to see the services
using the TCP protocol.


7. **Repeat step 6** for the remaining host IP addresses.
Notice that the SYN scan can identify the services (e.g. SSH, FTP, etc.), but not the versions of
these applications. You will discover that information in a later step.
8. **Make a screen capture** showing the details in the **Ports/Hosts tab for IP address** and **paste** it
in your Lab Report file. You may need to take multiple screen captures to show the entire
display.
9. **Click** the **Nmap Output tab** to return to the complete scan results.
10. In the Command box, **highlight –sS** , **type –O** and **press Enter** to begin the OS fingerprinting
scan and determine which operating systems (OS) are running on the network hosts.
11. **Click IP address** in the left pane.
This scan discovered both open TCP ports (as did the SYN scan) and made a guess at the
operating system for each host. The OS icon in the left pane changed as a result of that
guess.


# Task 9: Conducting a Vulnerability Scan with OpenVAS(10 Points)

1. **Right-click** the vWorkstation desktop and **select New > Text Document** from the context
menu.
2. With _New Text Document_ highlighted, **type targets** and **press Enter** to rename the new file.
3. **Double-click** the **targets.txt icon** to open the file in the text editor.
4. In the Notepad window, **type** the **IP addresses** discovered by Zenmap. Each IP address should
appear on its own line, as shown in the following figure.


**_Note:
OpenVAS is the scanning engine, but the Greenbone Security Assistant is the Web
interface. This interface allows users to quickly scan and analyze their network. In the
center of the screen, the assistant points to the Quick start area of the screen. You could
type an IP address directly in the box and press Start Scan with no further configuration
to create a simple scan of any machine. In the next steps, you will be scanning several IP
addresses, the hosts identified by Zenmap, so you will need to configure a report to scan
several IP addresses at once._**

5. **Select Configuration > Targets** from the menu to open the Targets page.
6. Scan targets and in the Report Summary section to download the Full Report in a PDF format.

# Task 10:Exercises (10 Points)

**1. Use nmap scripts and OpenVAS to conduct targeted scans (against single hosts)
against systems in your target network.
2. Account for the traffic using iptables. How many resources does scanning a single
host require, in terms of network bandwidth, and time?
3. Consider the sort of vulnerabilities a scanner will identify. What are the limitations
of the tool? Why?**


# Task 11: Lab Assessment Questions & Answers (10 Points)

1. What is Zenmap typically used for? How is it related to Nmap? Describe a scenario in which
you would use this type of application.
2. Which application can be used to perform a vulnerability assessment scan in the
reconnaissance phase of the ethical hacking process?
3. What must you obtain before you begin the ethical hacking process or penetration test on a
live production network, even before performing the reconnaissance step?
4. What is a CVE listing? Who hosts and sponsors the CVE database listing Web site?
5. Can Zenmap detect which operating systems are present on IP servers and workstations?
Which option includes that scan?
6. How can you limit the breadth and scope of a vulnerability scan?
7. Once a vulnerability has been identified by OpenVAS, where would you check for more
information regarding the identified vulnerability, exploits, and any risk mitigation solution?
8. What is the major difference between Zenmap and OpenVAS?
9. Why do you need to run both tools like Zenmap and OpenVAS to complete the
reconnaissance phase of the ethical hacking process?


# Task 12: Challenge Exercise : Install, Configure Nessus® and Perform a

# Vulnerability Assessment Scan (10 Points)

**1. Install and Load the " Nessus®.**
**_2._** **Connect to the Nessus®.**
**_3._** **There are five fields to enter the scan target:**
    **o Name**
    **o Type**
    **o Policy**
    **o Scan Targets**
    **o Targets**


