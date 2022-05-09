<?php
if(isset($_POST['btnSend'])){
    $email = $_POST['txtEmail'] ?? '';
    $subject = $_POST['txtSubject'] ?? '';
    $content = $_POST['tareaContent'] ?? '';

    $email = strip_tags($email);
    $subject = strip_tags($subject);

    //validate dữ liệu
    $checkEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
    if ($checkEmail && !empty($subject) && !empty($content)){
        // Mỗi thực hiện send mail
        // Gọi hàm mySendMail ở đây
        if(mySendMail($email, $subject, $content)){
            header("Location: ../index.php?state=success");
        }else{
            header("Location: ../index.php?state=fail");
        }
    } else {
        header("Location: ../index.php?state=error");
    }
}

function mySendMail($email, $subject, $content){
    $header = "From:huynhhieu.phu@gmail.com\r\n";
	//$header .= “Cc:qwe@somedomain.com\r\n”;
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html\r\n";
    $send = mail($email, $subject, $content, $header);

    if($send){
        return true;
    }
    return false;
}