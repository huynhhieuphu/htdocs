<?php
// Định nghĩa interface (giao diện) trong oop
// interface mục đích xây dựng lên core (mô hình, kiến trúc, bài toán) mở rộng.

interface Demo
{
    // KHÔNG được định nghĩa thuộc tính
    // Được khai báo phương thức nhưng chỉ ở chế độ public - phương thức phải là phương thức rỗng

    public function test(); // Đây là phương thức rỗng.

    public function check();
}

// 1 interface kế thừa từ 1 interface ntn??? --> dùng từ khoá: extends
interface Example extends Demo
{
    // KHÔNG cần override các phương thức từ interface [Demo] vì cả hai đều là interface.
    public function exp();
}

// 1 class kế thừa từ 1 interface ntn??? --> dùng từ khoá: implements
class A implements Example
{
    // Dùng tính đa hình
    // Vì class [A] kế thừa interface [Demo], nên class [A] phải override tất cả các phương thức của interface [Demo]
    public function test()
    {
        echo "This is method: " . __FUNCTION__;
        echo "<br>";
    }

    public function check()
    {
        echo "This is method: " . __FUNCTION__;
        echo "<br>";
    }

    public function exp()
    {
        echo "This is method: " . __FUNCTION__;
        echo "<br>";
    }

}

class B extends A
{
    public function lablab()
    {
        echo "This is method: " . __FUNCTION__;
        echo "<br>";
    }
}

// KHÔNG thể khởi tạo đối tượng cho interface Demo
$a = new A;
$b = new B;

$a->test();
$a->check();
$a->exp();
echo "<hr>";
$b->lablab();
$b->test();
$b->exp();

/*
 * Tổng hợp interface
 * 1. KHÔNG được phép khai báo thuộc tính
 * 2. Được khai báo phương thức với phạm vi bắt buộc là public --> phương thức phải rỗng
 * ...
 * */