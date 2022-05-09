<?php

namespace App\Controllers;

require "App/Models/Users.php";

use App\Models\Users;

class Home
{
    private $user;

    public function __construct()
    {
        $this->user = new Users;
    }

    public function index()
    {
        $data = $this->user->getDataUser();
        require "App/Views/home_view.php";
    }

}