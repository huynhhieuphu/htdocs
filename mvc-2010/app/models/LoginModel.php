<?php
namespace app\models;

if(!defined('PATH_ROOT')) die('Can not access !!!');

use app\config\database;
use \PDO;

class LoginModel extends database
{
    public function __construct()
    {
        parent::__construct();    
    }

    public function checkLogin($username, $password)
    {
        $data = [];
        $sql = "SELECT * FROM `User` WHERE `username` = :username AND `password` = :password";
        $stmt = $this->db->prepare($sql);
        
        if($stmt){
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            if($stmt->execute()){
                if($stmt->rowCount() > 0){
                    $data = $stmt->fetch(PDO::FETCH_ASSOC);
                }
            }
            $stmt->closeCursor();
        }
        return $data;
    }

    public function insertData($user, $pass, $email, $fname = null, $lname = null, $addr = null, $phone = null, $roleId = 2, $status = 1)
    {
        $flag = false;
        $created_at = date('Y-m-d H:i:s');
        
        $query = 'INSERT INTO `user`(`username`,`password`,`email`,`first_name`,`last_name`,`address`,`phone`,`role_id`,`status`,`created_at`) VALUES (:uname, :pass, :email, :fname, :lname, :addr, :phone, :roleId, :stt, :created_at)';

        $stmt = $this->db->prepare($query);
        if($stmt){
            $stmt->bindParam(':uname', $user, PDO::PARAM_STR);
            $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':fname', $fname, PDO::PARAM_STR);
            $stmt->bindParam(':lname', $lname, PDO::PARAM_STR);
            $stmt->bindParam(':addr', $addr, PDO::PARAM_STR);
            $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
            $stmt->bindParam(':roleId', $roleId, PDO::PARAM_INT);
            $stmt->bindParam(':stt', $status, PDO::PARAM_INT);
            $stmt->bindParam(':created_at', $created_at, PDO::PARAM_STR);
        
            if($stmt->execute()){
                $flag = true;
            }
            
            $stmt->closeCursor();
        }
        return $flag;
    }
}