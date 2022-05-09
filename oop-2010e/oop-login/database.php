<?php
    class Database
    {
        protected $db;

        public function __construct()
        {
            $this->db = $this->connect();
        }

        private function connect()
        {
            return true;
        }

        public function __destruct()
        {
            $this->db = false;
        }
    }