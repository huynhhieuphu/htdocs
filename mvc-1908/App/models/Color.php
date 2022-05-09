<?php

namespace App\Models;

if (!defined("ROOT_PATH")) {
    die('can not access');
}

use App\Configs\Database;
use \PDO;

class Color extends Database
{
    public function __construct()
    {
        parent::__construct();
    }
    // Lưu ý: mặc định INSERT-UPDATE-DELETE trả về true hoặc false
    // viết function insert data
    public function insertDataColor($name, $slug)
    {
        $status = 1;
        $createTime = date('Y-m-d H:i:s');
        $updateTime = null;
        $flag = false;

        $sql = "INSERT INTO `colors`(`name`,`slug`,`status`,`created_at`, `updated_at`) VALUES (:nameColor, :slug, :status, :createAt, :updatedAt)";
        $stmt = $this->db->prepare($sql);
        if ($stmt) {
            // Kiểm tra dữ liệu truyền vào tham số
            $stmt->bindParam(':nameColor', $name, PDO::PARAM_STR);
            $stmt->bindParam(':slug', $slug, PDO::PARAM_STR);
            $stmt->bindParam(':status', $status, PDO::PARAM_INT);
            $stmt->bindParam(':createAt', $createTime, PDO::PARAM_STR);
            $stmt->bindParam(':updatedAt', $updateTime, PDO::PARAM_STR);
            // Thực thi câu lệnh
            if ($stmt->execute()) {
                // Câu lệnh
                $flag = true;
            }
            $stmt->closeCursor();
        }

        return $flag;
    }

    // viết hàm update
    public function updateDataColor($id, $name, $slug)
    {
        $flag = false;
        $sql = "UPDATE `colors` SET `name` = :nameColor, `slug` = :slug WHERE `id` = :id";
        $stmt = $this->db->prepare($sql);
        if ($stmt) {
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':nameColor', $name, PDO::PARAM_STR);
            $stmt->bindParam(':slug', $slug, PDO::PARAM_STR);
            if ($stmt->execute()) {
                $flag = true;
            }
            $stmt->closeCursor();
        }
        return $flag;
    }

    public function deleteDataColor($idColor)
    {
        $flag = false;
        $sql = "DELETE FROM `product_color` WHERE `color_id` = :id";
        $sql2 = "DELETE FROM `colors` WHERE `id` = :id";

        $stmt = $this->db->prepare($sql);
        $stmt2 = $this->db->prepare($sql2);

        if ($stmt) {
            $stmt->bindParam(':id', $idColor, PDO::PARAM_INT);
            $stmt->execute();
            $stmt->closeCursor();
        }

        if ($stmt2) {
            $stmt2->bindParam(':id', $idColor, PDO::PARAM_INT);
            if ($stmt2->execute()) {
                $flag = true;
            }
            $stmt2->closeCursor();
        }

        return $flag;
    }

    // QUERY cho biết mã màu 1 có bao nhiêu sản phẩm ???
    public function getNumberProductByColor($idColor)
    {
        $data = [];
        $sql = "SELECT `p`.`name` AS `product_name`, `p`.`price`, c.`name` AS `color_name`
                FROM `products` AS `p`
                INNER JOIN `product_color` AS `pc` ON `p`.`id` = `pc`.`product_id`
                INNER JOIN `colors` AS `c` ON `c`.`id` = `pc`.`color_id` 
                WHERE `c`.`id` = :idColor ";
        $stmt = $this->db->prepare($sql);
        if($stmt){
            $stmt->bindParam(':idColor', $idColor, PDO::PARAM_INT);
            if($stmt->execute()){
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
        }
        return $data;
    }
}