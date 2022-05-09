<?php

// magic method oop
class A
{
    public function test()
    {
        echo "This is method: " . __FUNCTION__;
    }

    //constructor
    public function __construct($a)
    {
        echo "This is method: " . __FUNCTION__;
        // __FUNCTION__ : hằng số - lấy ra tên phương thức đang làm việc;
        echo '<br>';
        echo "Đây là tham số truyền từ bên ngoài class thông qua phương thức __construct là: {$a}";
        echo '<br>';
    }
    // Hàm __destruct() sẽ chạy cuối cùng khi 1 object tạo ra từ class
    public function __destruct()
    {
        echo '<br>';
        echo "This is method: " . __FUNCTION__ . " -- class --" . __CLASS__;
        // __CLASS__: hằng số - lấy ra tên class đang làm việc
    }

    public function __get($property)
    {
        echo "<br>";
        echo "Bạn vừa truy cập vào THUỘC TÍNH {$property}, không tồn tại trong class " . __CLASS__;
        echo "<br>";
    }

    public function __set($property, $value)
    {
        // $property: tên của thuộc tính
        // $value: giá trị của thuộc tính
        echo "<br>";
        echo "Bạn vừa truy cập vào THUỘC TÍNH {$property} và gán GIÁ TRỊ THUỘC TÍNH là {$value}, không tồn tại trong class " . __CLASS__;
        echo "<br>";
    }

    public function __call($method, $arguments)
    {
        // $method: tên của phương thức
        // $arguments: tham số truyền vào phương thức bằng kiểu mảng (nếu có)
        echo "<br>";
        echo "Bạn vừa truy cập vào PHƯƠNG THỨC {$method} và tham số truyền vào (nếu có), không tồn tại trong class" . __CLASS__;
        echo "<br>";

        echo "<pre>";
        print_r($arguments);
        echo "</pre>";
    }

    public static function __callStatic($method, $arguments){
        // $method: tên của phương thức
        // $arguments: tham số truyền vào phương thức bằng kiểu mảng (nếu có)
        echo "<br>";
        echo "Bạn vừa truy cập vào PHƯƠNG THỨC static {$method} và tham số truyền vào (nếu có), không tồn tại trong class" . __CLASS__;
        echo "<br>";

        echo "<pre>";
        print_r($arguments);
        echo "</pre>";
    }
}

/*
 * LƯU Ý: Phương thức nào gọi trước thì sẽ thực thi phương thức đó trước,
 * phương thức nào gọi sau thì sẽ thực thi phương thức đó sau.
 * Không có chuyện phương thức nào viết trước sẽ thực thi trước hay ngược lại.
 * Mà là theo thứ tự gọi phương thức mà thực thi theo thứ tự gọi
 *
 * */

$a = new A('xyz'); // Khi khởi tạo ra 1 object. Hàm __construct sẽ chạy đầu tiên khi có 1 object tạo ra từ class.
/*
 * Cần LƯU Ý: khi khởi tạo 1 object new A hoặc new A() đều được.
 * Khi nào dùng dấu (): khi trong class có phương thức __contrust và trong phương thức __construct có tham số
 * --> lúc này truyền tham số vào new A($agrument)
 * */

$a->test();
$a->name;
$a->age = 10;
$a->getName('Ti', 'Suu');
A::getAge(2, 3);