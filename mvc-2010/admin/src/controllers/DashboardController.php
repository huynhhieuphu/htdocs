<?php

namespace src\controllers;

if (!defined('PATH_ADMIN')) {
    die('Can not access !!!');
}

use src\controllers\BaseController as Controllers;

class DashboardController extends Controllers
{
    public function __construct()
    {
        if(!$this->isUserLogin()){
            header('location: index.php?c=login');
        }
    }

    public function index()
    {
        $header = [
            'title' => 'Dashboard - Shoes'
        ];

        $this->loadHeader($header);
        $this->loadView('dashboard/index_view');
        $this->loadFooter();
    }
}
