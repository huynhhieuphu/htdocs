<?php
namespace app\controllers;

if(!defined('PATH_ROOT')){
    die('Can not access !!!');
}

use app\controllers\BaseController as Controllers;
use app\Models\LoginModel as Login;

class HomeController extends Controllers
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->loadView('home/index.php', $data);
    }
}

// $test = new LoginController;
// $test->index();