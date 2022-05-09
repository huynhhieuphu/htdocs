<?php
if (isset($_POST['btnSend'])) {
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $content = $_POST['content'] ?? '';

    $email = strip_tags($email);
    $subject = strip_tags($subject);
    $content = trim($content);

    $checkEmail = filter_var($email, FILTER_VALIDATE_EMAIL);

    if ($checkEmail && !empty($subject) && !empty($content)) {
        // Cho phép gửi mail
        if (mySendMail($email, $subject, $content)) {
            header('Location: ../index.php?state=success');
        } else {
            header('Location: ../index.php?state=fail');
        }
    } else {
        header('Location: ../index.php?state=error');
    }
}


function mySendMail($email, $subject, $content)
{
    $header = "From:huynhhieu.phu@gmail.com\r\n";
	// $header .= "Cc:qwe@somedomain.com\r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html\r\n";
	$retval = mail($email, $subject, $content, $header);
    if($retval){
        return true;
    }
    return false;
}