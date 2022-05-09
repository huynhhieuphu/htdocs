<?php
// Các khái niệm về lập trình hướng đối tượng trong php

// 1- class là mô phỏng hay gom nhóm các đối tượng có cùng chung đặc điểm gì đó với nhau
class Student
{
    /*
     * Từ khoá define và const đều để định nghĩa HẰNG SỐ
     * Khác nhau giữa define và const: const dùng bên trong class được, define thì không được.
     * define chỉ dùng bên ngoài class
     *
     * LƯU Ý: HẰNG SỐ không phải thuộc tính
     * để truy cập vào HẰNG SỐ dùng tù khoá "self::" hoặc "tên-class::", không có dùng $this->, 
     * nó cũng không phải static dù giống cú pháp.
     * Còn những cái không phải static hoặc static đều là thuộc tính.
     * */
    const PI = 3.14;

    /*
     * Trong lập trình hướng đối tượng cần quan tâm 2 đó là thuộc tính và phương thức
     * là đặc điểm tính chất và hành động của đối tượng
     * */

    // 3- Khai báo các THUỘC TÍNH (đặc diểm tính chất của đối tượng
    // - thông thường sẽ biểu diễn các danh từ hoặc tính từ
    // - hoặc các biến)
    public $name = 'Van Teo';
    public $address = 'Ho Chi Minh';
    // Phạm vi truy cập public cho phép truy cập bất kì nơi nào

    private $single = true;
    private $money = 1000;
    // Phạm vi truy cập private chỉ cho phép truy cập bên trong class chính nó

    // Lưu ý: khi khai báo thuộc tính BẮT BUỘC phải khai báo phạm vi truy cập: public, $protected, $private
    // SAI:
    // $age = 20;
    // ĐÚNG
    protected $age = 20;
    // Phạm vi truy cập protected chỉ cho phép hoạt động trong class chính nó và trong class kế thừa, bên ngoài KHÔNG được.

    public static $subject = 'OOP';

    // 4- Khai báo các PHƯƠNG THỨC (các hành động của đối tượng
    // - thông thường sẽ biểu diễn bằng các động từ
    // - hoặc các hàm)
    public function Sdudy($name)
    {
        // Xử lý các logic
        return "dang hoc OOP {$name}";
    }

    public function Eat()
    {

    }

    private function hocLai()
    {

    }

    /*
     * Lưu ý: cách gọi biến hoặc hàm chỉ dùng cho PHP thủ tục
     * sang LTHĐT gọi là thuộc tính và phương thức
     * */

    // Lưu ý: Khi 1 phương thức không khai báo phạm vi truy cập, mặc định phạm vi phương thức đó là public
    function goSleep($time)
    {
        return "Sleep at {$time}";
    }
}

class Teacher extends Student
{
    protected $ranks = 'TK';

    public static $salary = 1000;

    public function getAge()
    {
        return $this->age;
    }

    public function getRanks()
    {
        // $this là con chỏ nội tại của class đó, tên class cụ thể: class ở đây là teacher
        // LƯU Ý: Riêng phương thức static thì không được chỏ tới.
        return $this->ranks . ' - ' . $this->getAge() . ' -- ' . $this->goSleep(35);

        // CẦN LƯU Ý: KHÔNG ĐƯỢC PHÉP GỌI LẠI PHƯƠNG THỨC CHÍNH NÓ, sẽ bị lỗi tràn bộ nhớ. Nếu cần thiết để gọi lại thì phải viết bằng ĐỆ QUY
        // SAI: $this->getRanks();
    }

    public function getNameSubject(){
        // Cách truy cập static với các thuộc tính trong class cha
        // return Teacher::$subject;

        // HOẶC là dùng từ khoá "self::" giống như $this->,
        // nhưng chỉ dùng cho static, nó dùng để truy cập các thuộc tính và phương thức cùa static
        return self::$subject . ' --- ' . self::PI;
    }
}

// 2- object là đối tượng thuộc 1 class nào đó, tuy cùng thuộc 1 class nhưng mỗi object đều độc lập, không phù thuộc gì nhau
$svCongnghe = new Student(); // đây là 1 đối tượn g thuộc lớp Student
$svCoKhi = new Student; // 1 đối tượng khác
$teach = new Teacher;

// SAI: vì thuộc tính đang protected
//$teachAge = $teach->age;

$teachAge = $teach->getAge();
echo $teachAge;
echo '<br>';

$teachRanks = $teach->getRanks();
echo $teachRanks;
echo '<br>';

// Cách truy cập STATIC với các thuộc tính trong class
$teachSalary = $teach::$salary;
echo $teachSalary;
echo '<br>';

$teachSubject = $teach::$subject;
echo $teachSubject;
echo '<br>';

$teachNameSubject = $teach->getNameSubject();
echo $teachNameSubject;
echo '<br>';

// Truy cập thuộc tính bên trong class

$myName = $svCongnghe->name; // truy cập vào thuộc tính name
echo $myName;
echo '<br>';

// SAI: vì thuộc tính đc khai báo private
//$myMoney = $svCoKhi->money;
//echo $myMoney;

// SAI: vì thiếu khai báo phạm vi
//$myAge = $svCoKhi->age;

// SAI: vì thuộc tính đc khai báo protected
//$myAge = $svCoKhi->age;

// Truy cập phương thức trong class
$leanring = $svCongnghe->Sdudy('JAVASCRIPT');
echo $leanring;
echo '<br>';

$sleep = $svCoKhi->goSleep(10);
echo $sleep;
echo '<br>';