<?php
    // Tạo ra cookie
    setcookie("trungtamIT", "2021",time() + 10, "/", "", 0);
    // Tham số 1: Tên của cookie, người dùng tự đặt
    // Tham số 2: giá trị của cookie
    // Tham số 3: thời gian tồn tại cookie
    // Tham số 4: chỉ ra đường dẫn mà cookie có hiệu lực
    // Tham số 5: giá trị rỗng có nghĩa áp dụng lên toàn bộ App
    // Tham số 6: Giao thức của cookie cần được bảo vệ (0: http - 1:https)
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookie</title>
</head>
<body>
    <a href="index2.php">Sang Trang index2.php để cookie của Trang index.php</a>
</body>
</html>
