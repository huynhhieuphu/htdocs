<?php
namespace src\Models;

if(!defined('PATH_ADMIN')){
    die('Can not access !!!');
}

use src\config\database;
use \PDO;

class CategoryModel extends database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllData()
    {
        $data = [];
        $query = "SELECT * FROM `category`;";
        $stmt = $this->db->prepare($query);
        if($stmt){
            if($stmt->execute())
            {
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $data;
            }
            $stmt->closeCursor();
        }
        return $data;
    }

    public function insertData($cateName, $cateDesc = null, $parentId)
    {
        $flag = false;
        $status = 1;
        $created_at = date('Y-m-d H:i:s');

        $query = "INSERT INTO `category`(`name`, `description`, `parent_id`,`status`,`created_at`)
                VALUES(:cateName, :cateDesc, :parentId, :stt, :created_at)";

        $stmt = $this->db->prepare($query);
        if($stmt){
            $stmt->bindParam(':cateName', $cateName, PDO::PARAM_STR);
            $stmt->bindParam(':cateDesc', $cateDesc, PDO::PARAM_STR);
            $stmt->bindParam(':parentId', $parentId, PDO::PARAM_INT);
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