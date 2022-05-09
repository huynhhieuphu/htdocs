<?php

// Các phương thức magic trong oop
/*
 * TIP:
 * Những phương thức do php tự định nghĩa sẵn sẽ luôn có 2 dấu gạch dưới
 * Còn trường hợp 1 dấu gạch dưới là do người lập trình tự định nghĩa.(những phương thức thường private hoặc protected)
 *
 * NOTE:
 * Trong class không có phân biệt thứ tự viết trước viết sau
 * Miễn trình bày sau cho logic.
 * Mà phù thuộc vào cách gọi thực thi phương thức, cái nào gọi trước thì thực thi trước và ngược lại.
 * */

class Demo
{
    // magic method __construct: luôn luôn là phương thức tự động chạy đầu tiên khi khởi tạo 1 object từ 1 class
    public function __construct($name, $age)
    {
        // __FUNCTION__ : hằng số - trả về tên phương thức (hàm) đang làm việc
        echo "This is method: " . __FUNCTION__;
        echo "<br>";
        echo "Đây là tham số truyền vào phương thức __contruct. My name: {$name} - my age: {$age}";
        echo "<br>";
    }

    // magic method __destruct: luôn luôn là phương thức tự động chạy cuối cùng khi khởi tạo 1 object từ 1 class
    public function __destruct()
    {
        echo "<br>";
        echo "This is method: " . __FUNCTION__ . " - This is class: " . __CLASS__;
        // __CLASS__ : hằng số  - trả về tên class (hoặc là namespace nếu có)
    }

    // magic method __call sẽ tự động chạy khi truy cập vào 1 phương thức không tồn tại trong class
    public function __call($name, $arguments = null)
    {
        // $name: là tên phương thức chưa tồn tại trong class
        // $agruments: là các tham số truyền vào phương thức chưa tồn tại trong class
        echo "<br>";
        echo "__call ==> This is name method: {$name} - value method: ";
        print_r($arguments);
        echo "<br>";
    }

    // magic method __callStatic sẽ tự động khi truy cập vào 1 phương thức static không tồn tại trong class
    public static function __callStatic($name, $arguments = null)
    {
        // $name: là tên phương thức static chưa tồn tại trong class
        // $agruments: là các tham số truyền vào phương thức static chưa tồn tại trong class
        echo "<br>";
        echo "__callStatic ==> This is name method static: {$name} - value method: ";
        print_r($arguments);
        echo "<br>";
    }

    // magic method __get sẽ tự động khi truy cập vào 1 thuộc tính không tồn tại trong class
    public function __get($name)
    {
        // $name: là tên thuộc tính chưa tồn tại trong class
        echo "<br>";
        echo "Bạn vừa truy cập vào thuộc tính: {$name} không tồn tại";
        echo "<br>";
    }

    // magic method __set sẽ tự động khi truy cập vào 1 thuộc tính và giá trị không tồn tại trong class
    public function __set($name, $value)
    {
        // $name: là tên thuộc tính chưa tồn tại trong class
        // $value: là giá trị thuộc tính chưa tồn tại trong class
        echo "<br>";
        echo "Bạn vừa truy cập vào thuộc tính: {$name} và giá trị: {$value} không tồn tại";
        echo "<br>";
    }

    /*
     * Lưu ý:
     * - khi nào chạy __get()??? khi biến (khởi tạo đối tượng) gọi đến thuộc tính không tồn tại trong class.
     * - khi nào chạy __set()??? khi biến (khởi tạo đối tượng) gọi đến thuộc tính và gán giá trị vào thuộc tính đó
     * mà thuộc tính và giá trị không tồn tại trong class.
     * */

    public function check()
    {
        echo "<br>";
        echo "This is method: " . __FUNCTION__;
    }

    public function test($a = null)
    {
        echo "This is method: " . __FUNCTION__;
        echo "<br>";
    }
}

$demo = new Demo('Teo', 30);// __contruct sẽ chạy
$demo->test();
$demo->check();
$demo->money(1, 2, 3); // __call sẽ chạy vì phương thức 'money' không tồn tại trong class Demo
Demo::loving(1, 2, 3); // __callStatic sẽ chạy vì phương thức static 'loving' không tồn tại trong class Demo
$demo->age; // __get sẽ chạy vì thuộc tính 'age' không tồn tại trong class Demo
$demo->name = 'Nguyen Van Teo'; // __set sẽ chạy vì thuộc tính 'name' và giá trị 'Nguyen van teo' không tồn tại trong class Demo

