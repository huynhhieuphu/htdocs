<?php

namespace App\models;

if (!defined('ROOT_PATH')) {
    die('can not access');
}

use App\Configs\Database;
use \PDO;

class Product extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllDataProduct()
    {
//        //giả sử kết nối thành công
//        if ($this->db) {
//            return [
//                ['id' => 1, 'name' => 'apple', 'price' => 1400, 'image' => 'apple.png'],
//                ['id' => 2, 'name' => 'samsung', 'price' => 1000, 'image' => 'samsung.png'],
//                ['id' => 3, 'name' => 'xiaomi', 'price' => 700, 'image' => 'xiaomi.png'],
//            ];
//        }

        // Cách lấy dữ liệu từ PDO
        $data = [];

        $sql = "SELECT * FROM `products`";
        // chuẩn bị thực thi câu lệnh sql
        // Prepares a statement for execution and returns a statement object
        $stmt = $this->db->prepare($sql);

        if ($stmt) {
            // thực thi câu lệnh sql
            if ($stmt->execute()) {
                // kiểm tra xem có dữ liệu nào trả về không
                if ($stmt->rowCount() > 0) {
                    // fetch(): lấy 1 dòng dữ liệu
                    // fetchAll(): lấy nhiều dòng dữ liệu
                    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                }
                // đóng kết nối lệnh execute() bên trên sau khi lấy được dữ liệu.
                $stmt->closeCursor();
            }
        }

        return $data;
    }

    public function getAllDataProductByKeywords($keywords = '')
    {
        $data = [];
        $keywords = "%{$keywords}%";
        $sql = "SELECT `p`.`id`, `p`.`name`, `p`.`price`, `p`.`images`, `b`.`name` AS `name_brand`, `c`.`name` AS `name_category`
                FROM `products` AS `p` 
                INNER JOIN `brands` AS `b` ON `b`.`id` = `p`.`brand_id`
                INNER JOIN `categories` AS `c` ON `c`.`id` = `p`.`category_id`
                WHERE `p`.`name` LIKE :keyword1 OR `b`.`name` LIKE :keyword2 OR `c`.`name` LIKE :keyword3";

        $stmt = $this->db->prepare($sql);
        if($stmt){
            $stmt->bindParam(':keyword1', $keywords, PDO::PARAM_STR);
            $stmt->bindParam(':keyword2', $keywords, PDO::PARAM_STR);
            $stmt->bindParam(':keyword3', $keywords, PDO::PARAM_STR);
            if($stmt->execute()){
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            $stmt->closeCursor();
        }
        return $data;
    }

    public function getAllDataProductByPage($start, $limit, $keywords = '')
    {
        $data = [];
        $keywords = "%{$keywords}%";
        $sql = "SELECT `p`.`id`, `p`.`name`, `p`.`price`, `p`.`images`, `b`.`name` AS `name_brand`, `c`.`name` AS `name_category`
                FROM `products` AS `p` 
                INNER JOIN `brands` AS `b` ON `b`.`id` = `p`.`brand_id`
                INNER JOIN `categories` AS `c` ON `c`.`id` = `p`.`category_id`
                WHERE `p`.`name` LIKE :keyword1 OR `b`.`name` LIKE :keyword2 OR `c`.`name` LIKE :keyword3 
                LIMIT :start, :limit";

        $stmt = $this->db->prepare($sql);
        if($stmt){
            $stmt->bindParam(':keyword1', $keywords, PDO::PARAM_STR);
            $stmt->bindParam(':keyword2', $keywords, PDO::PARAM_STR);
            $stmt->bindParam(':keyword3', $keywords, PDO::PARAM_STR);
            $stmt->bindParam(':start', $start, PDO::PARAM_INT);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            if($stmt->execute()){
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            $stmt->closeCursor();
        }
        return $data;
    }
}