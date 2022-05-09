<?php
    session_start();
    define('ROOT_PATH', 'index.php');
    
    $c = $_GET['c'] ?? 'products';
    $m = $_GET['m'] ?? 'index';

    // http://localhost:90/lphp2010e/b8/index.php?c=products&m=index

    switch($c){
        case 'products';
            require 'controllers/products.php';
            $m(); // => index();
            break;
        case 'cart';
            require 'controllers/cart.php';
            $m(); // => index();
            break;
        default:
            require 'page404.php';
            break;
    }