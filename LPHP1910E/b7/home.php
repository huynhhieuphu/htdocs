<?php
    session_start();
    require_once "checkLogin.php";

    if(!checkLogin()){
        header("Location: login.php");
        die();
    }
    $username = $_SESSION["username"] ?? "";
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
    <h2>Hello, <?= $username; ?></h2>
    <form action="server/handle-logout.php" method="post">
        <button type="submit" name="btnLogout">Logout</button>
    </form>
</body>
</html>
