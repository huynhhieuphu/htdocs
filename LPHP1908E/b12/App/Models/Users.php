<?php

namespace App\Models;

require "App/Configs/Database.php";

use App\Configs\Database;

class Users extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getDataUser()
    {
        $data = [];
        if ($this->db) {
            $data = [
                ['id' => 1, 'name' => 'admin', 'pass' => '123456']
            ];
        }
        return $data;
    }
}