# Lab 03

> [!IMPORTANT]
> The code will be uploaded on 08/20/2025

## Tools Used
1. Oracle Virtual Box Running Ubuntu Linux
	```linux	
		No LSB modules are available.
		Distributor ID: Ubuntu
		Description:    Ubuntu 24.04.3 LTS
		Release:        24.04
		Codename:       noble
	```
1. MAMP installed on a windows 11 device



### PHP /w mySQL
For this assignment I chose to use the PHP with mySQL. Why ? Because I had a little bit of experience with it in one of my classes and wanted to try it out again. 

<insert image of php running>

- Commands used to install MyAdminPHP

```
sudo apt update
```   
```
sudo apt upgrade
```
```
sudo apt install apache2 mysql-server php libapache2-mod-php php-mysql php-mbstring php-zip php-gd php-json php-curl
```
```
sudo apt install phpmyadmin
```
```
sudo phpenmod mbstring
```

<insert image of it working>


### Files Used
>[!IMPORTANT]
> test.html and test.php are the MAIN part of this assignment but I forgot to change it. 

1. Create_account.html
1. create_account.php
1. test.html 
1. test.php
1. welcome.html
1. welcome.php
1. logout.php


When the Ubuntu Server is up and running, and the MAMP server is running on the windows 11 device. We will get to see how the device talk with each other to send users information from one device to another. 

The goal was to make a website that have the user sign into a website and once in the welcome page will have a logout and button to click when the button is clicked it will increase by one starting at zero. When the user logs out and logs out and logs back in the counter stays the same. **But** if a new users enters the welcome page they will have their own counter to click how ever many times they need. 

### Problems on the assignment

1. I used my laptop for this assignment and working at work and at home with this assignment. I was playing with the apache2 files to try and set a name with the ip. I forgot that i did that and got an error with apache not running. 

```
× apache2.service - The Apache HTTP Server
     Loaded: loaded (/usr/lib/systemd/system/apache2.service; enabled; preset: enabled)
     Active: failed (Result: exit-code) since Sun 2025-08-17 23:23:29 UTC; 4s ago
   Duration: 32min 37.183s
       Docs: https://httpd.apache.org/docs/2.4/
    Process: 3328 ExecStart=/usr/sbin/apachectl start (code=exited, status=1/FAILURE)
        CPU: 39ms

Aug 17 23:23:29 webserver systemd[1]: Starting apache2.service - The Apache HTTP Server...
Aug 17 23:23:29 webserver apachectl[3330]: (99)Cannot assign requested address: AH00072: make_sock:>
Aug 17 23:23:29 webserver apachectl[3330]: no listening sockets available, shutting down
Aug 17 23:23:29 webserver apachectl[3330]: AH00015: Unable to open logs
Aug 17 23:23:29 webserver systemd[1]: apache2.service: Control process exited, code=exited, status=>
Aug 17 23:23:29 webserver systemd[1]: apache2.service: Failed with result 'exit-code'.
Aug 17 23:23:29 webserver systemd[1]: Failed to start apache2.service - The Apache HTTP Server.
```
**How to fix?** Go to the file /etc/apache2/ports.conf and remove the ip address in front of Listen <ip> 80 to Listen 80. I dont recall why I need to play with the config to make the name change but I got that fixed. 


2. Trying to connect to a database

For a long time i was trying to connect to a database table and was not getting that I needed to create my own to make it work. Once that was fix i was able to understand that it was easy to think about how the data was moving into the database.

3. Permissions

For some reason I thought I had admin privileges when I was sending my data to myadminphp **But I didnt**. There was no errors being displayed when trying to send the data I used ChatGPT to help display the errors and break down what was happening. The user 'Cameron' did not have the right premissions to create, add , delete, or make databases. After asking ChatGPT what mysql syntax will get me acces, IT STARTED TO WORK !!!!




