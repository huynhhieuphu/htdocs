<?php

class Cat
{
    public static $name = 'Tom'; //Khai báo thuộc tính static
    private static $age = 3;
    public $color = 'black';

    public static function getAge()
    {
        /*
         * *** Cách truy cập phương thức static với 1 bên có static
         * */

        // Cách 1:
        //return Cat::$age;

        // Cách 2: thường dùng thực tế
        return self::$age;

        // Lưu ý: self:: giống $this-> chỉ sử dụng trong class, bên ngoài class thì không được
    }

    public static function getColor()
    {
        /*
         * *** Cách truy cập phương thức static với bên KHÔNG có static
         * */
        // Cần khởi tạo lại object truy cập (con chỏ) lại
        // code tương minh:
//        $obj = new Cat;
//        return $obj->color;

        // hoặc code rút gọn: (new className)->property;
        return (new Cat)->color;
    }

    public function getName()
    {
        /*
         * *** Cách truy cập phương thức KHÔNG static với bên có static
         * */
        return self::$name;
    }
}

$myCat = new Cat;
//echo $myCat->name; // SAI - vì là thuộc tính static

// Truy cập thuộc tính static
// cú pháp clasName::$property
//echo Cat::$name; // ĐÚNG - cách truy cập thuộc tính static

// Truy cập phương thức static
// Cú pháp className::method();
//echo Cat::getAge();
//echo Cat::getColor();

echo $myCat->getName();