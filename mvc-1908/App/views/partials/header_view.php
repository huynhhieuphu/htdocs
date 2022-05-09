<?php if (!defined('ROOT_PATH')) die ('can not access') ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
</head>
<link rel="stylesheet" href="public/css/bootstrap.min.css">
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="?c=home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?c=product">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?c=color">Color</a>
            </li>
            <?php if (!empty($username)): ?>
                <li class="nav-item">
                    <div class="nav-link disabled" href="#"><?= $username ?></div>
                </li>
                <li class="nav-item">
                    <a href="?c=login&m=logout" class="btn btn-success">Logout</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="?c=login">Login</a>
                </li>
            <?php endif; ?>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="keywords" value="<?= $keywords; ?>">
            <button class="btn btn-outline-success my-2 my-sm-0" type="button" id="btnSearch">Search</button>
        </form>
    </div>
</nav>