<?php

namespace App\Model;

if (!defined('ROOT_PATH')) {
    die ('can not access');
}

use App\Config\Database;
use \PDO;

class Product extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getProductByID($id)
    {
        $data = [];
        $sql = "SELECT `p`.*, `b`.`name` AS `name_brand`,`i`.image FROM `products` AS `p` 
                INNER JOIN `brands` AS `b` ON `p`.`brand_id` = `b`.`id`
                INNER JOIN `image_product` AS `i` ON `p`.`id` = `i`.`product_id`
                WHERE `p`.`id` = :id;";
        $stmt = $this->db->prepare($sql);
        if ($stmt) {
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            if ($stmt->execute()) {
                if ($stmt->rowCount() > 0) {
                    $data = $stmt->fetch(PDO::FETCH_ASSOC);
                }
            }
            $stmt->closeCursor();
        }
        return $data;
    }

    public function getListImgByID($idProduct)
    {
        $data = [];
        $sql = "SELECT * FROM `image_product` WHERE `product_id` = :idProduct;";
        $stmt = $this->db->prepare($sql);
        if($stmt){
            $stmt->bindParam(':idProduct',$idProduct, PDO::PARAM_INT);
            if($stmt->execute()){
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            $stmt->closeCursor();
        }
        return $data;
    }

    public function getVersionProductByID($idProduct)
    {

    }

}