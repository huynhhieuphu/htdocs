<?php

namespace src\controller;

use src\model\ProductModel;

// lazy-loading: tên file và tên class trùng tên nhau
class HomeController
{
    private $db;

    public function __construct()
    {
        $this->db = new ProductModel();
    }

    public function index()
    {
        return $this->db->getAllData();
    }
}