<?php
// abstract trong php
// abstract (biểu diễn tính trừu tượng) cắt tỉa lấy ra các đặc trưng của đối tượng (object), trừu tượng hoá thành abstract class.
// abstract class (dev hiểu là lớp trừu tượng của lập trình hướng đối tượng) là class khởi nguồn cho các class khác KẾ THỪA từ abstract class giúp mở rộng ứng dụng cho nó càng ngày hoàn thiện.

// định nghĩa abstract class (lớp trừu tượng)
abstract class A
{
    // CHO PHÉP định nghĩa thuộc tính
    public $name = 'Teo';
    protected $age = 30;
    private $money = 10000;

    // Có 2 loại phương thức:

    // 1.phương thức abstract: giống như interface --> bắt buộc là phương thức rỗng
    // vì để kế thừa từ abstract nên không dùng private
    abstract public function action();

    abstract protected function ext();

    // 2.phương thức bình thường: như 1 class thuần tuý
    public function check()
    {
        echo "This is method: " . __FUNCTION__ . "<br>";
    }

    public function getMoney()
    {
        return $this->money;
    }
}

abstract class C extends A
{
    abstract public function act();
}

class B extends C
{
    // override các phương thức abstract từ abstract class [A]
    public function action()
    {
        echo "This is method: " . __FUNCTION__ . "<br>";
    }

    public function ext()
    {
        echo "This is method: " . __FUNCTION__ . "<br>";
    }

    public function act()
    {
        echo "This is method: " . __FUNCTION__ . "<br>";
    }

    public function getAge()
    {
        return $this->age;
    }
}

class D extends B
{

}

// abstract KHÔNG ĐƯỢC PHÉP khởi đối tượng (giống như interface) mà dùng để kế thừa cho các class sau.
//$a = new A; //SAI - KHÔNG ĐƯỢC PHÉP khởi tạo đối tượng

$b = new B;

$b->action();
$b->ext();
$b->check();
echo $b->getAge();
echo "<br>";
echo $b->getMoney();
echo "<hr>";

$d = new D;
echo $d->getAge();
echo "<br>";
echo $d->getMoney();

/*
 * Tổng hợp abstract class:
 * 1. CHO PHÉP khai báo thuộc tính (cả ba phạm vi public, protected, private).
 * 2. CHO PHÉP khai báo 2 phương thức: phương thức abstract (phạm vi public, protected) và phương thức thường
 * 3. KHÔNG được khởi tạo đối tượng
 */