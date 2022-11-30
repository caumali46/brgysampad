
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if (isset($_POST['submit-message'])) {

  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);
  try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    // $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
    $mail->Host       = 'mail.brgysampad.com';
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'inquiries@brgysampad.com';                     //SMTP username
    $mail->Password   = 'p@$$w0rdYPP';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($_POST['email'], 'Mailer');;
    $mail->addAddress('inquiries@brgysampad.com', 'Joe User');     //Add a recipient
    $mail->addAddress('nenalieparalejas@gmail.com');               //Name is optional
    // $mail->addReplyTo('nenalieparalejas@gmail.com', 'Information');
    $mail->addCC('nenalieparalejas@brgysampad.com');
    $mail->addBCC('nenalieparalejas@brgysampad.com');

    //Attachments

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['message'];
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Your message has been sent. Thank you!';
    $_SESSION['email_sent'] = true;
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    $_SESSION['email_sent'] = false;
  }
}
