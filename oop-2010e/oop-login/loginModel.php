<?php
    require 'database.php';

    class loginModel extends Database
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function checkUserLogin($username, $password)
        {
            // kiểm tra kết database thành công chưa   
            if($this->db){
                if($username === 'admin' && $password === '123456'){
                    return [
                        'id' => 1,
                        'username' => 'admin',
                        'password' => '123456',
                        'role' => 1
                    ];
                }
            }
            return [];
        }
        
    }