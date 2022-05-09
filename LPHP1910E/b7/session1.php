<?php
// Khởi tạo session
session_start();

// Tạo session
// sử dụng biến toàn cục kiểu mảng $_SESSION
$_SESSION["username"] = "admin";
$_SESSION["email"] = "tennguoidung@company.com";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session</title>
</head>
<body>
    <a href="session2.php">Sang Trang session2.php lấy ra giá trị session1.php tạo ra</a>
</body>
</html>
