<?php
namespace App\Models;

if(!defined('ROOT_PATH')){
    die('can not access');
}

use App\Configs\Database;
use \PDO;

class Login extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function checkLoginUser($username, $password)
    {
//        // Kiểm tra kết nối
//        if($this->db){
//            if($username === 'admin' && $password === '123456'){
//                return true;
//            }
//            return false;
//        }
//        return false;

        $data = [];
        // Đặt tham số truyền vào trong câu query sql dùng (dấu 2 chấm và tên tham số) ví dụ :param
        $sql = "SELECT * FROM `admins` WHERE `username` = :username AND `password` = :password";
        $stmt = $this->db->prepare($sql);
        if($stmt){
            // Validation - truyền tham số vào câu lệnh sql, kiểm tra kiểu dữ liệu truyền vào
            // dùng bindParam(':tham-so-query', tham-so-php, KIEM-TRA-DU-LIEU-THAM-SO TRUYEN)
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            // thực thi câu lệnh
            if($stmt->execute()){
                if($stmt->rowCount() > 0){
                    $data = $stmt->fetch(PDO::FETCH_ASSOC);
                }
            }
            $stmt->closeCursor();
        }
        return $data;
    }

}