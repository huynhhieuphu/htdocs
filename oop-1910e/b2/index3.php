<?php
// interface oop php
// interface không phải là 1 class thuần tuý (class thuần tuý có tổi thiểu các 4 đặc tính: tính trừu tượng, đóng gói, kế thừa, đa hình)
// interface không thể khởi tạo đối tượng

// Khai báo interface
interface Demo
{
    // Không được định nghĩa thuộc tính
    // Chỉ được khai báo phương thức ở dạng public và phương thức rỗng(không xử lý logic gì trong phương thức khai báo)
    public function getName(); // Đây là phương thức rỗng
    public function getAge();
    public function getAddress();
}

// 1 interface kế thừa từ 1 interface vẫn dùng keyword: extends
interface Test extends Demo
{
    public function getMoney();
}

// 1 class thuần tuý kế thừa từ 1 interface dùng keyword: implements
class A implements Test
{
    // Khi class kế thừa từ 1 interface thì nó phải OVERRIDE TOÀN BỘ các phương thức của interface
    public function getName()
    {
        return "This is name function: ". __FUNCTION__;
    }

    public function getAge()
    {
        return "This is name function: ". __FUNCTION__;
    }

    public function getAddress()
    {
        return "This is name function: ". __FUNCTION__;
    }

    public function getMoney()
    {
        return "This is name function: ". __FUNCTION__;
    }
}

class B extends A
{
    // B không phải bắt buộc override lại tất cả phương thức của interface
    // B không có kế thừa trực tiếp interface, còn A kế thừa trực tiếp interface

}