<?php
    // 1-nhúng các file thư viện php mailer
    require "../src/Exception.php";
    require "../src/PHPMailer.php";
    require "../src/SMTP.php";
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    if (isset($_POST['btnSend'])) {
        $toEmail = $_POST['toEmail'] ?? '';
        $subject = $_POST['subject'] ?? '';
        $content = $_POST['content'] ?? '';
    
        $toEmail = strip_tags($toEmail);
        $subject = strip_tags($subject);
    
        //validate dữ liệu
        $checkEmail = filter_var($toEmail, FILTER_VALIDATE_EMAIL);

        if ($checkEmail && !empty($subject) && !empty($content)) {
            // Dùng thư viện PHPMailer
            $mail = new PHPMailer(true);
            $mail->CharSet = 'UTF-8'; // gõ tiếng việt
    
            try {
                $mail->isSMTP();
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->Host       = 'smtp.gmail.com'; 
                $mail->Port       = 587;
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->SMTPAuth   = true;
                $mail->Username   = 'huynhhieu.phu@gmail.com';
                $mail->Password   = '130790xlan';
    
                $mail->setFrom('huynhhieu.phu@gmail.com', 'test mail localhost:90');
                $mail->addAddress($toEmail);
    
                // Attachments
                // $mail->addAttachment('../public/images/ip12promax.jpg');
    
                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body    = $content;
    
                if($mail->send()){
                    header("Location: ../index.php?state=success");
                }else{
                    header("Location: ../index.php?state=fail");
                }
            }catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
    
        } else {
            header("Location: ../index.php?state=error");
        }
    }