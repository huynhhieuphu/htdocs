<?php
     if(!defined('PATH_ADMIN')){
         die('Can not access !!!');
     }

    $c = $_GET['c'] ?? 'login';
    $m = $_GET['m'] ?? 'index';

    $controller = ucfirst($c).'Controller'; // get class name
    
    if(file_exists(PATH_SRC_CONTROLLERS.$controller.'.php')){
        $namespace = NAMESPACE_SRC_CONTROLLERS.$controller; // get namespace controller
        $obj = new $namespace();
        $obj->$m(); // run method
    }else{
        header('Location: page404.php');
    }