<?php
namespace App\Model;

class Product{
    public function getAllProduct()
    {
        return [
            ['id' => 1, 'name' => 'iphone', 'price' => 1000],
            ['id' => 2, 'name' => 'samsung', 'price' => 900]
        ];
    }
}