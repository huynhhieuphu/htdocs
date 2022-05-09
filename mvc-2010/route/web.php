<?php
    if(!defined('PATH_ROOT')){
        die('Can not access !!!');
    }

    $c = $_GET['c'] ?? 'login';
    $m = $_GET['m'] ?? 'index';

    $controller = ucfirst($c).'Controller'; // get class name
    
    if(file_exists(PATH_CONTROLLERS.$controller.'.php')){
        $namespace = NAMESPACE_CONTROLLERS.$controller; // get namespace controller
        // echo $namespace;
        // die;
        $obj = new $namespace();
        $obj->$m(); // run method
    }else{
        header('Location: page404.php');
    }