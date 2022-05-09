<?php

namespace App\Config;

if (!defined('ROOT_PATH')) {
    die ('Can not access !!!');
}

use \PDO;

class Database
{
    protected $db;

    public function __construct()
    {
        $this->db = $this->connection();
    }

    public function __destruct()
    {
        $this->disconnection();
    }

    // Kết nối database
    private function connection()
    {
        $dbh = new PDO('mysql:host=localhost;dbname=php1910;charset=utf8', 'root', 'admin');
        // show error pdo mysql php
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $dbh;
    }

    // Ngắt kết database
    private function disconnection()
    {
        $this->db = null;
    }
}