<?php
// "namespace" dùng để tạo vùng chỉ đinh cho 1 class nào đó
namespace b12\Models;

class User
{
    public function getAllDataUsers()
    {
        return [
            ['id' => 1, 'name' => 'Nguyen Van Teo', 'age' => 20],
            ['id' => 2, 'name' => 'Tran Thi No', 'age' => 20]
        ];
    }
}
