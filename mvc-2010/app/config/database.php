<?php
    namespace app\config;

    if(!defined('PATH_ROOT')) die('Can not access !!!');

    use \PDO;

    class database
    {
        protected $db;

        public function __construct()
        {
            $this->connection();
        }

        private function connection()
        {
            try {
                $this->db = new PDO('mysql:host=localhost;dbname=dbShopShoes;charset=UTF8;', 'root', '');
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                return $this->db;
             } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
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

