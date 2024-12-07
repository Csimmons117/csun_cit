### Setting up Elastic Beanstalk

*Get into your AWS account.*
1. Once inside we are going to setup the database first go to RDS
2. Once there click create
3. Leave the "standard create"
4. Click on the MySQL
5. Engine version change to 8.0.35
6. Change templates to : Dev/test
7. Availability and durability: click on Mult-AZ DB instance
8. Now in setting under the Availability and durability : give the instance a name ebdb
9. Credentials settings for master username: admin
10. Credentials management:Self Managed
11. For Master password (Enter something you can remember): Admintest1@
12. Instance configuration make sure you have these selected: Burstable class(includes t class),and make sure its a "db.t3.small".
13. Storage: allocate 20gb
14. Connectivity: Leave default VPC, leave DB subnet group,and **enable** public access
15. Make sure your using the default VPC AWS give you is selected
16. Scroll down to Monitoring and disable "Enable Enhanced Monitoring"
17. In Additional configuration in the Initial database name: ebdb (re-enter the name at the top)
18. Create database

*Give your database a few minutes to initialize, and once it's up and running click it (ebdb). Find your Endpoint on the page, VPC and subnets. We will use them in a moment.*

### Important files for setup
- Download drupal-beanstalk.zip from this link: [Link to zip file](https://drive.google.com/file/d/1pt0GEO0LnBcjLFKo5GpRG_g_7g3YwNHc/view?usp=sharing)

- Extract the file to a folder (I kept it in the downloads)
- Once everything is extracted locate the .ebextensions/dev.config file with your text editor (Notepad,Vscode,Sublime,etc.)
- Edit only this :
```
    option_settings:
      aws:elasticbeanstalk:customoption:
        MyIP: "xxx.xxx.xxx.xxx/32"
``` 
*Replace the x's with your IP address (google "what is my IP")*
- Once done with that save the file and locate efs-create.config should be in the same folder.
- Edit only this part:
```
    option_settings:
      aws:elasticbeanstalk:customoption:
        EFSVolumeName: "EB-EFS-Volume"
        VPCId: "vpc-XXXXXXXXX"
    ## Subnet Options
        SubnetA: "subnet-XXXXXXXXX"
        SubnetB: "subnet-XXXXXXXXX"
        SubnetC: "subnet-XXXXXXXXX"
        SubnetD: "subnet-XXXXXXXXX"
        SubnetE: "subnet-XXXXXXXXX"
        SubnetF: "subnet-XXXXXXXXX"

```
*Fill in your VPC and 6 subnets from your database and save the file*










