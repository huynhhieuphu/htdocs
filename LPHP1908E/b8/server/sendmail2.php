<?php
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['btnSend'])) {
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $content = $_POST['content'] ?? '';

    $email = strip_tags($email);
    $subject = strip_tags($subject);
    $content = trim($content);

    $checkEmail = filter_var($email, FILTER_VALIDATE_EMAIL);

    if ($checkEmail && !empty($subject) && !empty($content)) {
        $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.googlemail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'huynhhieu.phu@gmail.com';                     // SMTP username
            $mail->Password   = '130790xlan';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('huynhhieu.phu@gmail.com', 'HUỲNH GIA');
//            $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
            $mail->addAddress($email);               // Name is optional
//            $mail->addReplyTo('info@example.com', 'Information');
            $mail->addCC('phuhh2019@gmail.com');
            $mail->addCC('huynhphu.hp@gmail.com');
//            $mail->addBCC('bcc@example.com');

            // Attachments
//            $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            $mail->addAttachment('../images/image003.jpg', 'image003.jpg');    // Optional name
            $mail->addAttachment('../images/image004.png', 'image004.png');

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $content;
//            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if($mail->send()){
                header('Location: ../index.php?state=success');
            }else{
                header('Location: ../index.php?state=fail');
            }

        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        header('Location: ../index.php?state=error');
    }
}