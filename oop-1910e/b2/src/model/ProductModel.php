<?php

namespace src\model;

class ProductModel
{
    public function getAllData()
    {
        return [
            ['id' => 1, 'name' => 'item a', 'price' => 10000],
            ['id' => 2, 'name' => 'item b', 'price' => 20000]
        ];
    }
}