<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'javalanguage.core@gmail.com';                 // SMTP username
$mail->Password = 'iam19970721,,';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;            //456                        // TCP port to connect to

$mail->setFrom('javalanguage.core@gmail.com', 'Muhammad Taha Azam');
$mail->addAddress('muhammadtahaazam@gmail.com', 'Muhammad Taha Azam');  

// Add a recipient
$mail->addAddress('mobinurrehman@gmail.com');               // Name is optional
$mail->addAddress('javalanguage.core@gmail.com');               // Name is optional

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Hassan Dhedhi';
$mail->Body    = 'Congratulations! You are now promoted to the full time job , Now your salary is Rs, 100,000Rs per month with twice a bonus per year!';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}