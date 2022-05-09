<?php
    //khởi tạo session
    session_start();
    // xóa tất cả session
    session_destroy();
    
    // xóa từng session
    //unset($_SESSION['userSession']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa session</title>
</head>
<body>
    <h1>Xóa session</h1>
    <a href="home.php">Quay lại Home</a>
</body>
</html>