<?php

namespace App\model;

/*
 * model: là nơi xử lý dữ liệu
 * */

if (!defined('ROOT_PATH')) {
    die('can not file');
}

use App\Config\Database;
use \PDO;

//lazy-loading: tên file và tên class giống nhau
class Home extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllData()
    {
        $data = [];
        $sql = "SELECT `p`.`id`, `p`.`name`, `p`.`price`, (SELECT `i`.`image` FROM `image_product` AS `i` WHERE `i`.`product_id` = `p`.`id` LIMIT 1) AS `image`
FROM `products` AS `p`;";
        $stmt = $this->db->prepare($sql);
        if ($stmt) {
            if ($stmt->execute()) {
                if ($stmt->rowCount() > 0) {
                    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                }
            }
            $stmt->closeCursor();
        }
        return $data;
    }
}