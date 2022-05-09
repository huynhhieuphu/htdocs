<?php
// kết nối database
namespace App\Configs;

if (!defined('ROOT_PATH')) {
    die('can not access');
}

use \PDO;

class Database
{
    protected $db;

    public function __construct()
    {
        $this->connection();
    }

    public function __destruct()
    {
        $this->close_connection();
    }

    private function connection()
    {
//        $this->db = true;
//        return $this->db;

        // Kết nối database sử dụng PDO
        $servername = 'localhost';
        $database = 'dbShoes';
        $username = 'root';
        $password = 'admin';

        try {
            $this->db = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
            // view query error in PDO PHP
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $this->db;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    private function close_connection()
    {
        // ngắt kết nối database
        return $this->db = null;
    }
}