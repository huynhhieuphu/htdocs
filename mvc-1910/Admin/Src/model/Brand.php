<?php
namespace Src\model;

if(!defined('ADMIN_PATH')){
    die('Can not access');
}

use Src\Config\Database;
use \PDO;

class Brand extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($name, $slug, $image, $description, $status)
    {
        $flag = false;
        $created_at = date('d-m-y H:i:s');
        $update_at = null;

        $sql = "INSERT INTO `brands`(`name`,`slug`,`image`,`description`,`status`,`created_at`,`updated_at`) 
                VALUES (:name, :slug, :image, :description, :status, :created_at, :updated_at)";

        $stml = $this->db->prepare($sql);
        if($stml)
        {
            $stml->bindParam(':name', $name, PDO::PARAM_STR);
            $stml->bindParam(':slug', $slug, PDO::PARAM_STR);
            $stml->bindParam(':image', $image, PDO::PARAM_STR);
            $stml->bindParam(':description', $description, PDO::PARAM_STR);
            $stml->bindParam(':status', $status, PDO::PARAM_INT);
            $stml->bindParam(':created_at', $created_at, PDO::PARAM_STR);
            $stml->bindParam(':updated_at', $update_at, PDO::PARAM_STR);

            if ($stml->execute()){
                $flag = true;
            }
            $stml->closeCursor();
        }

        return $flag;
    }
}