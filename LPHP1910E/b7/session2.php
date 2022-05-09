<?php
    // Khởi tạo session
    // khi sử dụng session luôn luôn phải hàm khởi tạo session_start()
    session_start();
    // lấy giá trị session từ file session1.php tạo ra
    // nên kiểm tra tồn tại hay không ???
    $user = $_SESSION["username"] ?? '';
    $email = $_SESSION["email"] ?? '';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session 2</title>
</head>
<body>
    <h1>Hello <?= $user ?> - Email: <?= $email ?></h1>
    <a href="session3.php">Xoá Session</a>
    <br>
    <a href="session1.php">quay về session 1</a>
</body>
</html>