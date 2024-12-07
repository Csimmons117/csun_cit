### Setting up Load Balancer

*In are VPC we have a public and private instance. We are only going to mess with are private instance moving forward*

1. Get into your private instance for example mine is 10.10.0.4.
2. Installed web server look up how to install LAMP on aws linux
3. Paste command in private instance ```sudo dnf install -y httpd wget php-fpm php-mysqli php-json php php-devel```
4. Make sure httpd is on: sudo systemctl start httpd
5. Now to make it start when the instance turns on: sudo systemctl enable httpd

*Check to see if it worked go to the public box*
6. curl [ip of the private box]

If you dont get a response there is a problem with security group for private.
7. Change the security group to allow port 80.(edit inbound rules) use the CIDR of the VPC
8. Now it should work test the connection ```curl [ip of the private instance]```
This is going to be are custom server we are going to create an AMI from this server. So next time are not going to launch from amazon, we are going to launch are instance.

### Create an AMI
1. Go to EC2 and click on the private instance.
2. Click on actions with the private instance selected.
3. Click on image and templates.
4. Name: Cams-web-server
5. Leave reboot instance on
6. Create image
<!--wait about ten minutes for AMI setup-->
7. Once your AMI is done click on it.
8. Click on actions, and click the first one copy AMI
9. Make sure the destination region is Oregon
10. Copy AMI
*Test to see if it copied over change your region to Oregon*
As you can see you have an AMI copied over.

Go to CSUN canvas
1. Click on the cit270 lab and click in files in the files you want "instance.php"
2. Upload the file to S3 , pick a bucket to upload file. **Dont forget what bucket you upload the file**

Now we are going to launch an instance in the Oregon region

1. Click on instance, and create an instance.
2. In "Application and OS images" click on my AMI
3. In key pair choose to proceed without keypair.
4. Network setting, click on  "existing security group" pick the one non default one.
<!--4. Configure security groups for the instance allow are server to the public for http.-->
5. Edit network setting auto-assign public ip
6. Scroll all the way down and click on "Advice details"
7. Scroll all the way down to "user data"
8. paste the command in the box for 'user data'
``` #!/bin/bash```
``` aws s3 cp <s3 url that has the instance.php file> /var/www/html/index.php```
```systemctl start httpd```
9. Once pasted scroll up to instance profile, click on it , and select "LabsInstanceProfile"
10. Launch instance 
11. Click on the instance running , and copy the public URL
**It should show you the php page**
<!--If you still cant connect double check security groups-->
<!--The instance are in the private subnet and not accessible from the public subnet
    -->

### Setting up Application Load Balancer

1. Create application load balancer
2. name: Cam-load-balancer
3. Scroll down to Network Mapping
4. vpc there is only one
5. Availability zones select them all
6. create new security group
    *Never open port22 on load balancer*
    - name load balancer security group
    - description: load-balancer security group 
    - add inbound rule: http and https ()
    - create
    - Than go back to the load balancer
    - refresh security group and click the one you created
7. Scroll down to "Listeners and Routings"
    - Click on "Create target group"
    - Name: cam-target-group-web-server
    - Scroll down and click next
    - On the Register targets page click on the available instance, click on Include as pending below, and finally click on create target group.
8. Now when you comeback to the instance setup go back to Listeners and routing
9. Refresh the target group and click the drop down for default action **Forward to** the target group you created. 
<!--*This is not need since we are not going to cert but if we did add this*
9. Add listener Https --> 
10. Go to secure listener settings, and click on "Request new ACM certificate"
11.  Once the new page is open, open a second page and go to Route53.
12. On route53 click on the one that is not your domain page.
13. Create a new record
    - name cam-ELB
    - 1.2.3.4 (we will fix later)
    - create record 
14. Now go back to ACM page.
15. create a certificate
    - request public certificate
    - Domain name: paste the name from route 53 "cam-ELB"
    - Request
16. When the certificate page is pending under domain click "Create records in route53"
    - click create record.
    - <!--Comeback error with cert-->

17. Go back to load balancer, secure listener settings, refresh the page.
18. Select the certificate you created 
19. create load balancer
20. Go back to route53 and click on the one you created
    - Edit record 
    - turn on Alias
    - The top box: click on "Alias to application and classic load balancer"
    - the bottom box: US west (Oregon) 
    - If everything was done right click on the load balancer you created 
    *MOM LOVES YOU*
    - save 
Now to test to see if it is working copy the name of the record and paste it in a new tab in the URL. 


### Two errors you will get:
- 502 [Bad gateway, check target group *Unhealthy* kill instance, go to the load balancer under registered targets deregister the instance there. Make a new instance and in the load balancer register targer and pick the new instance this should fix the problem.]
- 503 service temporarily unavailable [ Go to load balancer and double check target group. target might be in the stopped state]
- 504 [Gateway timeout]

*After trouble shooting if you change one time make sure you reload the webpage to see if it fixed anything*
