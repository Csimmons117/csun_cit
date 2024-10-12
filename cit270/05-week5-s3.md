### Setting up S3


1. Click "Create Bucket"
2. Bucket name: "mybuckets3"<!--example-->
3. Scroll down to **Default Encryption:**
4. Click on the second option "Server-side encryption with AWS Key Management Service keys(SSE-KMS)"
5. For **AWS KMS key** "Choose from your AWS KMS keys"
6. Click the down arrow and select pre made key
7. Click "Create Bucket"

> This is to back up files
8. Click name on the bucket
9. Click Objects
10. Click upload
11. File is small leave on standard
12. Scroll down to server-side encryption
13. Click Specify an encryption key
14. upload
15. Get a file that is a little bigger I used alpine linux 
16. Open the bucket again 
17. Upload the "Alpine Linux"
18. Click on Properties 
19. Click Zone-1A20. Upload
20. See results next week
This is to back up files-->

#### Lifecycle Rules
1. Click on Management 
2. Click "Create lifecycle rule"
3. Lifecycle rule name: "Move to Glacier"
4. Under Choose a rule scope "Apply to all objects in the bucket"
5. Scroll down to Lifecycle rule actions
6. Click "Transition current versions of objects between storages classes"
7. Scroll down to Transition current versions of objects between storages classes
8. Under Days after object creation: 1
9. Create rule
Large file will move to glacier

#### Static website on Amazon S3
1. [google](https://docs.aws.amazon.com/AmazonS3/latest/userguide/HostingWebsiteOnS3Setup.html) 
2. Open a Route 53 tab
3. Click Create record
4. Name: S3-test
5. Value: 1.1.1.1
6. Click create record 
7. Make a S3 tab
8. Create a bucket
9. **Make the name the same as your record we just created:** S3-test
10. Scroll down to "Block Public Access Settings for this bucket"
11. Uncheck/Unblock
12. Check I understand
13. Leave everything the same, and create bucket
14. Now go to CSUN Canvas
15. Go to CIT270 LAB
16. Click on files
17. Download S3Website.zip
18. Un-zip file
19. Upload the files content to are new bucket
20. Now click on properties
21. Scroll down to Static website hosting
22. Click enable
23. Under index document: index.html
24. Save changes
25. Now go to permissions
26. Scroll down to bucket policy
27. Click edit
28. Paste the code below
```
{
    "Version": "2012-10-17",
    "Statement": [
        {
            "Sid": "PublicReadGetObject",
            "Effect": "Allow",
            "Principal": "*",
            "Action": [
                "s3:GetObject"
            ],
            "Resource": [
                "arn:aws:s3:::Bucket-Name/*"
            ]
        }
    ]
}
```
29. Save changes
30. Website should be up
## Before you leave start your database and then stop it so you don't get charged all week
> End of class 9/28/2024
<!--Note replace Bucket-Name with your name-->
