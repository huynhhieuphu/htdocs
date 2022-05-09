<?php
// file database.php dùng để kết nối database
namespace App\Configs;

class Database
{
    protected $db;

    public function __construct()
    {
        $this->connection();
    }

    private function connection()
    {
        $this->db = true;
    }

    public function __destruct()
    {
        $this->db = null;
    }
}