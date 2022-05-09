<?php

namespace b12\Controllers;

// "use" dùng để chỉ định namespace cần dùng tới
use b12\Models\User;

require "Models/User.php";

class Home
{
    public function index()
    {
        // làm sao gọi hàm getAllDataUsers trong nay
        $user = new User();
        $data = $user->getAllDataUsers();
        return $data;
    }

    public function getNameSpace()
    {
        return "This is namespace:" . __NAMESPACE__;
    }
}

//$home = new Home();
//echo "<pre>";
//print_r($home->index());
