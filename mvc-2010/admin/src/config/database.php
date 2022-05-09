<?php
namespace src\config;

if(!defined('PATH_ADMIN')){
    die('Can not access !!!');
}

use \PDO;

class database
{
    protected $db;

    public function __construct()
    {
        $this->db = $this->connection();
    }

    private function connection()
    {
        try {
            $conn = new PDO('mysql:host=localhost;dbname=dbShopShoes;charset=UTF8;', 'root', '');
//            $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//            $conn ->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $conn;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            exit;
        }
    }

    private function closeConnection()
    {
        $this->db = null;
    }

    public function __destruct()
    {
        $this->closeConnection();
    }
}

