<?php
    // lấy cookie từ index.php tạo ra
    // sử dụng biến toàn cục kiểu mảng $_COOKIE
    $cookie = $_COOKIE["trungtamIT"] ?? '';
    echo "Giá trị cookie là: {$cookie}";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookie - index2.php</title>
</head>
<body>
    <br>
    <a href="index3.php">Xoá cookie</a>
    <br>
    <a href="index.php">Tạo mới lại cookie</a>
</body>
</html>
