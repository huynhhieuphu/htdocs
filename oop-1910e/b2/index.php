<?php
// Định danh 1 tên class cụ thể nào đó
namespace b2;

class A
{
    public function test()
    {
        return "This is name function: " . __FUNCTION__;
    }
}