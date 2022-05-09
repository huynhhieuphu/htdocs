<?php
namespace app\controllers;

if(!defined('PATH_ROOT')){
    die('Can not access !!!');
}

class BaseController
{
    public function __call($name, $arguments)
    {
        header('Location: page404.php');
    }

    protected function loadView($path, $data = [])
    {
        extract($data);
        require "app/views/{$path}.php";
    }
}
