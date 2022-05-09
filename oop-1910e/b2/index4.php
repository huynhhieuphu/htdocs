<?php
// abstract class oop php
// abstract class cũng không phải class thuần tuý - không thể khởi tạo đối tượng trong class

// Khai báo abstract class
abstract class A
{
    // Được khai báo thuộc tính
    public $name = "Nguyen Van Teo";
    protected $age = 30;
    private $money = 100000;

    // Có 2 loại phương thức:

    // 1 - phương thức có abstract
    // là phương thức rỗng - có từ khoá abstract đứng đầu
    // phạm vi của phương thức abstract là public hoặc protected. KHÔNG được là private
    abstract public function getName();

    abstract protected function getAge();
    // SAI: abstract private function getMoney();

    // 2 - phương thức bình thương
    public function getMoney()
    {
        return $this->money;
    }
}

// 1 abstract class kế thừa từ 1 abstract class dùng keyword: extends
abstract class B extends A
{
    abstract public function test();
}

// 1 class thuần tuý kế thừa từ 1 abstract class dùng keyword: extends
class C extends B
{
    // OVERRIVE lại TOÀN BỘ các phương thức là abstract trong abstract class
    public function getName()
    {
        return "This is name function: " . __FUNCTION__;
    }

    public function getAge()
    {
        return "This is name function: " . __FUNCTION__;
    }

    public function test()
    {
        return "This is name function: " . __FUNCTION__;
    }
}

class D extends C
{
    // Trong class D không bắt buộc phải override lại các phương thức abstract của abstract class
}

// SAI: $b = new B; // Sai vì B là abstract class
$c = new C;
echo $c->test();


/*
 * Sự giống nhau giữa interface và abstract:
 * - không phải class thuần tuý
 * - không thể khởi tạo đối tượng
 *
 * Sự khác nhau giữa interface và abstract:
 * - abstract cho phép định nghĩa thuộc tính
 * - abstract cho phép định nghĩa phương thức bình thường
 *
 * LƯU Ý: trong PHP chỉ Đơn Kế Thứa, không có Đa kế thừa
 * */