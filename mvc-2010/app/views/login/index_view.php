<?php if(!defined('PATH_ROOT')) die('Can not access !!!') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="public/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
                <h1 class="text-center mt-3"><?= $title ?></h1>
                <form action="index.php?c=login&m=handleLogin" method="post" class="border my-3 p-3">
                    <div class="form-group">
                      <label for="user">Username</label>
                      <input type="text" name="user" id="user" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="pass">Password</label>
                      <input type="password" name="pass" id="pass" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnLogin">Login</button>
                    <a href="index.php?c=login&m=register">Register</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>