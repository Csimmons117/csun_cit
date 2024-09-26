eee_W_3452129@runweb135550:~$ ls
eee_W_3452129@runweb135550:~$ aws ec2 terminate-instances --instance-ids i-08a749801bb750d0a


{
    "TerminatingInstances": [
        {
            "CurrentState": {
                "Code": 32,
                "Name": "shutting-down"
            },
            "InstanceId": "i-08a749801bb750d0a",
            "PreviousState": {
                "Code": 16,
                "Name": "running"
            }
        }
    ]
}
eee_W_3452129@runweb135550:~$ 



[ec2-user@ip-172-31-29-159 ~]$ 
[ec2-user@ip-172-31-29-159 ~]$
[ec2-user@ip-172-31-29-159 ~]$
[ec2-user@ip-172-31-29-159 ~]$ 
[ec2-user@ip-172-31-29-159 ~]$
[ec2-user@ip-172-31-29-159 ~]$
[ec2-user@ip-172-31-29-159 ~]$ sudo dnf install
Display all 19926 possibilities? (y or n)
[ec2-user@ip-172-31-29-159 ~]$ sudo dnf search mysql
Last metadata expiration check: 0:58:05 ago on Sat Sep 21 15:58:12 2024. 
==============================================
Name & Summary Matched: mysql 
==============================================
apr-util-mysql.x86_64 : APR utility library MySQL DBD driver
bind-dlz-mysql.x86_64 : BIND server mysql and mysqldyn DLZ modules
collectd-mysql.x86_64 : MySQL plugin for collectd
dovecot-mysql.x86_64 : MySQL back end for dovecot 
mysql-selinux.noarch : SELinux policy modules for MySQL and MariaDB packages
perl-DBD-MySQL.x86_64 : A MySQL interface for Perl
perl-DateTime-Format-MySQL.noarch : Parse and format MySQL dates and times   
php8.1-mysqlnd.x86_64 : A module for PHP 8.1 applications that use MySQL databases
php8.2-mysqlnd.x86_64 : A module for PHP 8.2 applications that use MySQL databases
php8.3-mysqlnd.x86_64 : A module for PHP 8.3 applications that use MySQL databases 
postfix-mysql.x86_64 : Postfix MySQL map support
============================================== 
Summary Matched: mysql 
==============================================
mariadb105-devel.x86_64 : Files for development of MariaDB/MySQL applications
mariadb105-server-utils.x86_64 : Non-essential server utilities for MariaDB/MySQL applications 
perl-DBD-MariaDB.x86_64 : MariaDB and MySQL driver for the Perl5 Database Interface (DBI)
[ec2-user@ip-172-31-29-159 ~]$ 


=-=-=-=-=-=-=-=-=-=-=-=-=-

[ec2-user@ip-172-31-29-159 ~]$ sudo dnf search mariadb
Last metadata expiration check: 0:59:44 ago on Sat Sep 21 15:58:12 2024.
====================================================================================================== 
Name & Summary Matched: mariadb 
======================================================================================================
mariadb-connector-c.x86_64 : The MariaDB Native Client library (C driver)
mariadb-connector-c-devel.x86_64 : Development files for mariadb-connector-c
mariadb-connector-c-test.x86_64 : Testsuite files for mariadb-connector-c
mariadb105-connect-engine.x86_64 : The CONNECT storage engine for MariaDB
mariadb105-devel.x86_64 : Files for development of MariaDB/MySQL applications
mariadb105-oqgraph-engine.x86_64 : The Open Query GRAPH engine for MariaDB
mariadb105-pam.x86_64 : PAM authentication plugin for the MariaDB server
mariadb105-rocksdb-engine.x86_64 : The RocksDB storage engine for MariaDB
mariadb105-server.x86_64 : The MariaDB server and related files
mariadb105-server-utils.x86_64 : Non-essential server utilities for MariaDB/MySQL applications
mariadb105-sphinx-engine.x86_64 : The Sphinx storage engine for MariaDB
mariadb105-test.x86_64 : The test suite distributed with MariaDB
perl-DBD-MariaDB.x86_64 : MariaDB and MySQL driver for the Perl5 Database Interface (DBI)
perl-DBD-MariaDB-tests.x86_64 : Tests for perl-DBD-MariaDB
=========================================================================================================== 
Name Matched: mariadb 
===========================================================================================================
mariadb-connector-c-config.noarch : Configuration files for packages that use /etc/my.cnf as a configuration file

mariadb105.x86_64 : A very fast and robust SQL database server 
mariadb105-backup.x86_64 : The mariabackup tool for physical online backups  
mariadb105-common.x86_64 : The shared files required by server and client
mariadb105-cracklib-password-check.x86_64 : The password strength checking plugin
mariadb105-errmsg.x86_64 : The error messages files required by server and embedded
mariadb105-gssapi-server.x86_64 : GSSAPI authentication plugin for server
========================================================================================================= 
Summary Matched: mariadb 
==========================================================================================================
mysql-selinux.noarch : SELinux policy modules for MySQL and MariaDB packages
[ec2-user@ip-172-31-29-159 ~]$ 
[ec2-user@ip-172-31-29-159 ~]$ sudo dnf install mariadb105
Last metadata expiration check: 1:01:12 ago on Sat Sep 21 15:58:12 2024
Dependencies resolved.   
Install  5 Packages
Total download size: 1.8 M 
Installed size: 19 M 
Is this ok [y/N]: y
-------------------------------------------------------------------------------------------------------
Installed:                                                                                                                                                               mariadb-connector-c-3.1.13-1.amzn2023.0.3.x86_64          
mariadb-connector-c-config-3.1.13-1.amzn2023.0.3.noarch          
mariadb105-3:10.5.25-1.amzn2023.0.1.x86_64         
mariadb105-common-3:10.5.25-1.amzn2023.0.1.x86_64             
perl-Sys-Hostname-1.23-477.amzn2023.0.6.x86_64 
Complete! 
-------------------------------------------------------------------------------------------------------
[ec2-user@ip-172-31-29-159 ~]$ 
[ec2-user@ip-172-31-29-159 ~]$ mysql  
ERROR 2002 (HY000): Can't connect to local MySQL server through socket '/var/lib/mysql/mysql.sock' (2)
[ec2-user@ip-172-31-29-159 ~]$ 

[ec2-user@ip-172-31-29-159 ~]$ mysql -h cam-database-01.cilhjhhs7vpq.us-east-1.rds.amazonaws.com -u admin -P 
mysql: option '-P' requires an argument 
[ec2-user@ip-172-31-29-159 ~]$ mysql -h cam-database-01.cilhjhhs7vpq.us-east-1.rds.amazonaws.com -u admin -p 
Enter password: 
 Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 92
Server version: 10.11.8-MariaDB-log managed by https://aws.amazon.com/rds/ 
Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others. 
Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> 