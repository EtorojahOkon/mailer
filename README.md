## Library that makes use of PhpMailer to send mails
Before use, effect the following changes

### mail.php
Set Mail SMTP parameters in lines 6, 7 and 8
```php
    $h = "mail.domain.com"; //email host
    $u = "username@domain.com"; //email username
    $p = "password"; //email password
```
where $h is the mail host, $u is the username and $p is the password

Also change the Mail SetFrom paramter in line 19 to one of your choice
```php
    $mail->SetFrom($u, "Test Team");
```

You can change the mail interface files on line 21 or simply ignore and edit the mail.html file
```php
$contenthtml = file_get_contents("./mail.html");
```

Where your mail content goes is in the ********** in mail.html. You do not need to replace this.

If removed, replace ********** in line 22 of mail.php file with what it was replaced with

You can also adjust other parameters in the mail.php file or simply leave them as they are.

To use, simply call the sendMail function which carries three parameters
- $to(string): Email address destination
- $subject(string): Subject of the email
- $message(string): Message(which may include html markup)

#### Example:
```php
    sendMail("test@gmail.com", "Test Mail", "Hi, Test");
```
Enjoy :grin:
