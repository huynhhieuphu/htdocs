<?php
namespace src\models;

if(!defined('PATH_ADMIN')){
    die('Can not access !!!');
}

use \PDO;
use src\config\database;

class LoginModel extends database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function checkLogin($username, $password){
        $result = [];
        if($this->db){
            $query = "SELECT * FROM `user` WHERE `username` = :username AND `password` = :password;";
            $stmt = $this->db->prepare($query);
            if($stmt){
                $stmt->bindParam(':username', $username, PDO::PARAM_STR);
                $stmt->bindParam(':password', $password, PDO::PARAM_STR);
                if($stmt->execute()){
                    if($stmt->rowCount() > 0) {
                        $result = $stmt->fetch(PDO::FETCH_ASSOC);
                    }
                }
                $stmt->closeCursor();
            }
        }
        return $result;
    }
}