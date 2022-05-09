<?php
    session_start();
    require_once "checkLogin.php";
    if(checkLogin()){
        header("Location: home.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo App Login</title>
</head>
<body>
    <form action="server/handle-login.php" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username" id="js-username">
        <br><br>
        <label for="password">Password: </label>
        <input type="password" name="password" id="js-password">
        <br><br>
        <input type="checkbox" name="remember" id="js-remember"> <label for="remember">Remember</label>
        <br><br>
        <button type="submit" name="btnLogin">Login</button>
    </form>
</body>
</html>