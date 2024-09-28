### Setting up phpMyAdmin


### Setting up Database
_If I don't talk about don't click it_
1. Launch AWS instance from learners lab
2. in the search bar type "RDS" click on it
3. Once in click "Create database"
4. **engine options** click on "MariaDB"
5. **Templates** click on "free tier"
6. **DB instance identifier** name-database
7. **Master username** leave "admin"
8. **Master password** make something up you will remember
9. **New VPC security group name** name it "rds"
10. Create Database

### Installing SQL on Linux
1. SSH into your Linux machine
2. type the command "sudo dnf install mariadb105 -y"
```
[ec2-user@ip-172-31-29-159 ~]$ sudo dnf install mariadb105
Last metadata expiration check: 1:01:12 ago on Sat Sep 21 15:58:12 2024
Dependencies resolved.   
Install  5 Packages
Total download size: 1.8 M 
Installed size: 19 M 
Is this ok [y/N]: y
-------------------------------------------------------------------------------------------------------
Installed:                                                                                                                                              mariadb-connector-c-3.1.13-1.amzn2023.0.3.x86_64          
mariadb-connector-c-config-3.1.13-1.amzn2023.0.3.noarch          
mariadb105-3:10.5.25-1.amzn2023.0.1.x86_64         
mariadb105-common-3:10.5.25-1.amzn2023.0.1.x86_64             
perl-Sys-Hostname-1.23-477.amzn2023.0.6.x86_64 
Complete! 
-------------------------------------------------------------------------------------------------------
[ec2-user@ip-172-31-29-159 ~]$
``` 
3. Now that we have the utilities
4. Go back to your RDS page
5. Click on your database
6. Under "security" under "VPC security groups" click the link 
7. Click on the check box
8. Click on inbound rules then edit inbound rules
9. "DELETE" the rule
10. Keep the page open and move to EC2 
11. click on the instance running
12. click on security and look at that security group your instance is in
13. Go back to RDS inbound rules and click "add rule"
14. Type : mysql/aurora ,  source: custom , In the next bar:click the security group that matches you Linux machine.
15. Save rule 
16. Go to the database instance home page
17. Copy Endpoint
18. Type the following command "mysql -h <endpoint for you database>.amazonaws.com -u admin -p" 
```
[ec2-user@ip-172-31-29-159 ~]$ mysql -h cam-database-01.cilhjhhs7vpq.us-east-1.rds.amazonaws.com -u admin -p 
Enter password: 
 Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 92
Server version: 10.11.8-MariaDB-log managed by https://aws.amazon.com/rds/ 
Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others. 
Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> 

 
MariaDB [(none)]> exit                                                                                                                                                                                                                       
Bye
```
### Setting up phpMyAdmin
1. Go to this [link](https://www.phpmyadmin.net/downloads/)
2. Right click **phpMyAdmin-5.2.1-english.zip**
3. Copy link
4. Do the following command:<!--I was lazy and didnt feel like tell you what else to do-->
```
[ec2-user@ip-172-31-29-159 ~]$ wget https://files.phpmyadmin.net/phpMyAdmin/5.2.1/phpMyAdmin-5.2.1-english.tar.gz                 
--2024-09-21 17:58:10--  https://files.phpmyadmin.net/phpMyAdmin/5.2.1/phpMyAdmin-5.2.1-english.tar.gz                           
Resolving files.phpmyadmin.net (files.phpmyadmin.net)... 109.61.91.231, 2a02:6ea0:e200::17                              
Connecting to files.phpmyadmin.net (files.phpmyadmin.net)|109.61.91.231|:443... connected.                                   
HTTP request sent, awaiting response... 200 OK                                                                                                         
Length: 8337690 (8.0M) [application/gzip]                                                                                             
Saving to: ‘phpMyAdmin-5.2.1-english.tar.gz’                                                                            
phpMyAdmin-5.2.1-english.tar.gz                             
100%[============================================>]   7.95M  --.-KB/s    in 0.1s
2024-09-21 17:58:11 (77.6 MB/s) - ‘phpMyAdmin-5.2.1-english.tar.gz’ saved [8337690/8337690]
[ec2-user@ip-172-31-29-159 ~]$ ll                                                                                                                                                                                                                                   
-rw-r--r--. 1 ec2-user ec2-user    1137 Sep 14 17:39 history.txt
-rw-r--r--. 1 ec2-user ec2-user 8337690 Mar 14  2024 phpMyAdmin-5.2.1-english.tar.gz
-rw-rw-r--. 1 ec2-user ec2-user     103 Sep 14 16:53 webserver.conf                                                                                     
[ec2-user@ip-172-31-29-159 ~]$
```  
5. Now that we have the file **phpMyAdmin-5.2.1-english.tar.gz**
6. We are going to extract file
7. Use the command below:
```
[ec2-user@ip-172-31-29-159 ~]$ tar -xzf phpMyAdmin-5.2.1-english.tar.gz
[ec2-user@ip-172-31-29-159 ~]$ ll phpMyAdmin-5.2.1-english
total 764
-rw-r--r--.  1 ec2-user ec2-user   2587 Feb  7  2023 CONTRIBUTING.md
-rw-r--r--.  1 ec2-user ec2-user  71006 Feb  7  2023 ChangeLog
-rw-r--r--.  1 ec2-user ec2-user  18092 Feb  7  2023 LICENSE 
-rw-r--r--.  1 ec2-user ec2-user   1520 Feb  7  2023 README
-rw-r--r--.  1 ec2-user ec2-user     29 Feb  7  2023 RELEASE-DATE-5.2.1 
-rw-r--r--.  1 ec2-user ec2-user     69 Feb  7  2023 babel.config.json 
-rw-r--r--.  1 ec2-user ec2-user   5323 Feb  7  2023 composer.json  
-rw-r--r--.  1 ec2-user ec2-user 305844 Feb  7  2023 composer.lock   
-rw-r--r--.  1 ec2-user ec2-user   4810 Feb  7  2023 config.sample.inc.php  
drwxr-xr-x.  3 ec2-user ec2-user     18 Feb  7  2023 doc 
drwxr-xr-x.  2 ec2-user ec2-user     99 Feb  7  2023 examples  
-rw-r--r--.  1 ec2-user ec2-user  22486 Feb  7  2023 favicon.ico    
-rw-r--r--.  1 ec2-user ec2-user   1074 Feb  7  2023 index.php     
drwxr-xr-x.  6 ec2-user ec2-user     77 Feb  7  2023 js      
drwxr-xr-x.  4 ec2-user ec2-user  16384 Feb  7  2023 libraries    
-rw-r--r--.  1 ec2-user ec2-user   2787 Feb  7  2023 package.json       
-rw-r--r--.  1 ec2-user ec2-user     26 Feb  7  2023 robots.txt       
drwxr-xr-x.  5 ec2-user ec2-user    138 Feb  7  2023 setup           
-rw-r--r--.  1 ec2-user ec2-user   1153 Feb  7  2023 show_config_errors.php     
drwxr-xr-x.  2 ec2-user ec2-user    141 Feb  7  2023 sql       
drwxr-xr-x. 25 ec2-user ec2-user  16384 Feb  7  2023 templates   
drwxr-xr-x.  6 ec2-user ec2-user     83 Feb  7  2023 themes   
-rw-r--r--.  1 ec2-user ec2-user    965 Feb  7  2023 url.php  
drwxr-xr-x. 28 ec2-user ec2-user  16384 Feb  7  2023 vendor 
-rw-r--r--.  1 ec2-user ec2-user 253106 Feb  7  2023 yarn.lock  
[ec2-user@ip-172-31-29-159 ~]$ 
```
8. Now move the files to are HTML directory
```
[ec2-user@ip-172-31-29-159 ~]$ mv * /var/www/html/
[ec2-user@ip-172-31-29-159 ~]$ ll 
total 0           
[ec2-user@ip-172-31-29-159 ~]$
```
9. cd /var/www/html/
10. cd phpMyAdmin-5.2.1-english
11. mv * ..
12. ls -a
13. mv .* ..
14. cd ..
15. rmdir phpMyAdmin-5.2.1-english/
16. Refresh your website
17. Welcome to phpMyAdmin

# **Make sure to stop the RDS database you created when finished or you will be charged money!!**
# After seven days it will turn back on just turn it back off

### Had an error with login in will go over in 05.md file
