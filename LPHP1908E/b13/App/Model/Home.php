<?php

namespace App\Model;

class Home
{
    public function getData()
    {
        return [
            ['id' => 1, 'name' => 'Teo', 'age' => 30, 'address' => 'TP.HCM'],
            ['id' => 2, 'name' => 'No', 'age' => 28, 'address' => 'Long An']
        ];
    }
}