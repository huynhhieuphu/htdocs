<?php

namespace App\model;

if (!defined('ROOT_PATH')) {
    die('can not access');
}

use App\Config\Database;
use \PDO;

class Login extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function checkLogin($username, $password)
    {
        $data = [];
        // Viết mysql theo PDO php
        $sql = 'SELECT * FROM `admins` WHERE `username` = :username AND `password` = :password AND `status` = 1;';
        // Kiểm tra câu lệnh sql PDO có đúng không ?
        $stmt = $this->db->prepare($sql);
        if($stmt){
            // Kiểm tra tham số truyền vào câu lệnh sql PDO
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            // Thực thi câu lệnh
            if ($stmt->execute()){
                // Thực thi thành công
                // lấy dữ liệu về - kiểm tra xem có dữ liệu trả về không ?
                if($stmt->rowCount() > 0){
                    // chắc chắn có dữ liệu về
                    $data = $stmt->fetch(PDO::FETCH_ASSOC);
                    // hàm fetchAll: trả về mảng đa chiều - nhiều dòng dữ liệu
                    // hàm fetch: trả về 1 dòng dữ liệu - mảng 1 chiều
                    // PDO::FETCH_ASSOC: trả về 1 mảng mà key của mảng là tên cột trong bảng dữ liệu.
                }
            }
            // đóng thực khi các câu lệnh bên trên, nếu có lệnh mysql cần thực thi bên dưới tiếp
            $stmt->closeCursor();
        }
        return $data;
    }

    public function updateLastLogin($id)
    {
        $flag = false;
        $last_login = date('Y-m-d H:i:s');
        $sql = 'UPDATE `admins` SET `last_login` = :lastLogin WHERE `id` = :id;';
        $stmt = $this->db->prepare($sql);
        if($stmt){
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':lastLogin', $last_login, PDO::PARAM_STR);
            if($stmt->execute()){
                $flag = true;
            }
            $stmt->closeCursor();
        }
        return $flag;
    }
}