### Setting up Elastic Beanstalk

1. Get into your AWS account.
2. In the search bar look for "Elastic Beanstalk"
3. name: Cam-EBS
4. Scroll down to Platform 
    - leave managed platform 
    - Platform : PHP
    - **Next**
    - Service role: LabRole
    - Ec2 key pair: oregon
    - Ec2 instance profile: LabInstanceProfile
    - **Next**
    - VPC : Click the only one there
    - public ip address: check activated
    - instance settings:  instance subnet select all four.
    - Skip the database 
    - **Next**
    - instance metadata service (IMDS)
    - ec2 security group: launch-wizard-1
    - scroll down to **Next** 
    - Monitoring: Change to Basic
    - scroll down and uncheck managed updates
    - Container options: proxy server : Apache
    - Next
    *Didnt launch it today with launch next week*