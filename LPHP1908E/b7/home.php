<?php
session_start();

$username = $_SESSION['username'] ?? '';
$cookie = $_COOKIE['cookieApp'] ?? '';

require_once "checklogin.php";
checkUserLogin();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
<h1>Hello, <?= $username ?></h1>
<h2>Cookie : <?= $cookie ?></h2>
<form action="server/handleLogout.php" method="post">
    <button type="submit" name="btnLogout">Logout</button>
</form>
</body>
</html>
