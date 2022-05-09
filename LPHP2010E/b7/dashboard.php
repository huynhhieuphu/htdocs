<?php
    require 'helper.php';

    if(!checkUserLogin()){
        header('location: ./login_view.php');
        exit();
    }

    $username = $_SESSION['user'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="public/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Welcome: <?= $username ?> to dashboard</h1>
                <form action="controllers/handleLogout.php" method="post">
                    <button type="submit" class="btn btn-primary" name="btnLogout">Logout</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>