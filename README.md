<h1 align="center">Forgot Password Recovery</h1>


**Languages**
```
1.PHP
2.CSS
3.JAVASCRIPT
4.MYSQL
```
**Features**
```
1.Login System
2.Register System
3.Recovery Code send Email
4.Email Function
```


<hr>

## How to configure XAMPP to send Mail from Localhost in PHP

**XAMPP** is an abbreviation for cross-platform, Apache, MySQL, PHP, and Perl. XAMPP lets you work on a local server and test local copies of websites using PHP code and MySQL databases.

![image of xampp](https://1.bp.blogspot.com/-86M_suDYcHk/X1ZaGEkNLUI/AAAAAAAAA3Q/aOCFHJb2QuYEXY8lTjbwoPPTXfUo5WyDQCLcBGAsYHQ/s640/How%2Bto%2Bconfigure%2BXAMPP%2Bto%2Bsend%2BMail%2Bfrom%2BLocalhost%2Bin%2BPHP.webp)

As a part of the experiment, developers need to send emails, and as we all know that sending mail in XAMPP through the localhost can be much more painful if we don’t know how to configure XAMPP to send mail through the localhost using Gmail.

To send mail from localhost XAMPP using Gmail, configure XAMPP after installing it. To configure the XAMPP server to send mail from the localhost, we have to make some changes in two files one is php and another one is sendmail.ini.

#### First, go to the XAMPP installation directory and open the XAMPP folder and follow the below steps same:

1. Go to the (C:\xampp\php) and open the php file then find the mail function by scrolling down or simply press ctrl+f to search it directly then find the following lines and pass these values. Remember, there may be a semicolon ; at the starting of each line, simply remove the semicolon from each line which is given below.

**PHP FILE:**
```[mail function]
For Win32 only.
http://php.net/smtp
SMTP=smtp.gmail.com
http://php.net/smtp-port
smtp_port=587
sendmail_from = your_email_address_here
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"
```
That's all for this file, save the file by pressing ctrl+s and close it.


2. Now, go the (C:\xampp\sendmail) and open the sendmail.ini  then find **sendmail** by scrolling down or press ctrl+f to search it directly then find the following lines and pass these values. Remember, there may be a semicolon ; at the starting of each line, simply remove the semicolon from each line which is given below.
   
**SENDMAIL.INI FILE:**
```smtp_server=smtp.gmail.com
smtp_port=587
error_logfile=error.log
debug_logfile=debug.log
auth_username=your_email_address_here
auth_password=your_password_here
force_sender=your_email_address_here (it's optional)
```

That's all for this file, save the file by pressing ctrl+s and close it. After all changes in the two files, don't forget to restart your apache server.

Now, you're done with the required changes in these files. To send mail using Gmail paste the following codes in your PHP file.

**PHP CODE:**
```$receiver = "receiver email address here";
$subject = "Email Test via PHP using Localhost";
$body = "Hi, there...This is a test email send from Localhost.";
$sender = "From:sender email address here";

if(mail($receiver, $subject, $body, $sender)){
    echo "Email sent successfully to $receiver";
}else{
    echo "Sorry, failed while sending mail!";
}
```

```
Important note: If your mail isn't sent and you got a warning or 
error. Please configure your google account security as 
"Less secure apps". To configure it:Go to your Google account 
then click on the Security tab and scroll down, there you can 
see the Less secure app access panel, Simply turn on that. 
This panel only shows if you haven't enabled 2-Step Verification.`
```

If you're getting an error as a password is wrong then simply go to the sendmail.ini file and put the correct password of your Gmail account which you've provided in sendmail_from in sendmail.ini.


<h3 align="center">Thanks for coming, Keep coming.</h3>



<p align="center">Thanks for coming, Keep coming ❤️.</p>
