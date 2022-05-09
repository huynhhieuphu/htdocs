<?php

namespace b2;

require "index.php";

// use để sử dụng class có namespace,
// dùng as để đặt lại tên cho đơn giản
use b2\A as MyClass;

class B extends MyClass
{
    const PI = 3.14;

    public function getNameSpace()
    {
        return "This is namespace: " . __NAMESPACE__;
    }

    public function getPI()
    {
        return self::PI;
    }
}

$b = new B;
echo $b->test();
echo "<br>";
echo $b->getNameSpace();
echo "<br>";
// cách truy cập HẰNG SỐ
echo B::PI;
echo "<br>";
echo $b->getPI();