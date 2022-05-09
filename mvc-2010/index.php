<?php
    require 'vendor/autoload.php';
    
    if(file_exists('route/web.php')){
        define('PATH_ROOT', 'index.php');
        
        require_once 'app/config/session.php';
        require_once 'app/config/constant.php';   
        require 'route/web.php';
    }else{
        header('Location: page404.php');
    }