<?php
    // khởi tạo session
    session_start();
    echo '<pre>';
    print_r($_COOKIE);
    echo '<hr>';
    print_r($_SESSION);
    echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Cookie</title>
</head>
<body>
    <?php 
        // sử dụng cookie
        $user_cookie = $_COOKIE['userCookie'] ?? '';
        // sử dụng session
        $user_session = $_SESSION['userSession'] ?? '';
    ?>
    <h1>My cookie: <?= $user_cookie ?></h1>
    <a href="deleteCookie.php">Xóa cookie</a>
    <br><br>
    <a href="cookie_view.php">Tạo cookie</a>
    
    <h1>My session: <?= $user_session ?></h1>
    <a href="deleteSession.php">Xóa Session</a>
    <br><br>
    <a href="session_view.php">Tạo session</a>
</body>
</html>