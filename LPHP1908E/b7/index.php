<?php
    // Thiết lập session
    // lưu ý: khi thao tác session, khởi tạo session_start()
    session_start();

    //Tạo ra session và gàn giá trị (bắt buộc phải khởi động tạo session)
    $_SESSION['age'] = 29;
    $_SESSION['email'] = "test@gmail.com";

    // set cookie
    // hàm time() trả về số giây từ 01/01/1970 đến thời điểm hiện tại
    setcookie("myCookie", "hEllo wOrld", time() + 10, "/", "", 0);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Cookie</title>
</head>
<body>
    <a href="index2.php">go to index(Xem giá trị cookie bên file index)</a>
</body>
</html>
