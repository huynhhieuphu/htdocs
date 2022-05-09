<?php

namespace App\Controller;

use App\Model\Home;
use App\Model\Product;

class HomeController
{
    private $home;
    private $product;

    public function __construct()
    {
        $this->home = new Home;
        $this->product = new Product;
    }

    public function index()
    {
        $data = $this->home->getData();
        print_r($data);
    }

    public function showProduct()
    {
        $data = $this->product->getAllProduct();
        print_r($data);
    }
}