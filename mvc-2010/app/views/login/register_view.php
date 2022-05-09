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
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h1 class="text-center mt-3"><?= $title ?></h1>
                <form action="index.php?c=login&m=handleRegister" method="post" class="border my-3 p-3">
                    <div class="row">
                        <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <label for="user">Username <span class="text-danger">(*)</span></label>
                            <input type="text" name="user" id="user" class="form-control">
                            <?php if(isset($_SESSION['msg-user'])): ?>
                                <span class="text-danger"><?= $_SESSION['msg-user']; ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <label for="pass">Password <span class="text-danger">(*)</span></label>
                            <input type="password" name="pass" id="pass" class="form-control">
                            <?php if(isset($_SESSION['msg-pass'])): ?>
                                <span class="text-danger"><?= $_SESSION['msg-pass']; ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <label for="email">Email <span class="text-danger">(*)</span></label>
                            <input type="email" name="email" id="email" class="form-control">
                            <?php if(isset($_SESSION['msg-email'])): ?>
                                <span class="text-danger"><?= $_SESSION['msg-email']; ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <label for="fname">First name</label>
                            <input type="text" name="fname" id="fname" class="form-control">
                        </div>
                        <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" id="lname" class="form-control">
                        </div>
                        <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <label for="addr">Address</label>
                            <input type="text" name="addr" id="addr" class="form-control">
                        </div>
                        <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnResgister">Register</button>
                    <a href="index.php?c=login&m=index">Back to Login</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>