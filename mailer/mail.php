<?php
    require("PHPMailer/src/PHPMailer.php");
    require("PHPMailer/src/SMTP.php");
    require("PHPMailer/src/Exception.php");
    function sendMail($to, $subject, $message) {
        $h = "mail.domain.com"; //email host
        $u = "username@domain.com"; //email username
        $p = "password"; //email password
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->CharSet = 'UTF-8';
        $mail->Host = $h;
        $mail->Port = 465;
        $mail->IsHTML(true);
        $mail->Username = $u;
        $mail->Password = $p;
        $mail->SetFrom($u, "Test Team");
        $mail->Subject = $subject;
        $contenthtml = file_get_contents("./mail.html"); //pass your mail nterface file here or simply edit mail.html
        $mail->Body = str_replace("**********", $message, $contenthtml);
        $mail->AddAddress($to);
        if (!$mail->Send()) {
            return false;
        }
        else {
            return true;
        }
    }
?>