<?php
require '../vendor/autoload.php';
session_start();

if(file_exists('route/web.php')){
    define('PATH_ADMIN', 'admin/index.php'); 

    require_once 'src/config/constant.php';
    require 'route/web.php';
}else{
    header('Location: page404.php');
}