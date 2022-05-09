<?php
// Các kiến thức oop - php
// 1- class là 1 lớp trong đó nó sẽ chứa các thuộc tính hoặc là phương thức của 1 đối tượng và nó sẽ gom nhóm nhiều đối tượng cùng chung đặc tính vào
// Định nghĩa class: keyword "class" + nameClass
class Student
{
    // 3 - Property là đặc điểm, tính chất của đối tượng thuộc về 1 class, được định thông qua danh từ, tính từ
    // Khai báo thuộc tính
    public $name = 'van teo';
    // public: phạm vi hoạt động thuộc tính
    // $name: tên của thuộc tính
    // 'van teo': giá trị của thuộc tính
    protected $loving = 'thi no';
    private $money = 200000;

    /*
     * 5- Tính đóng gói: pham vi truy cập
     *  + public pham vi truy cập bất kì đâu trong class, class kế thừa, và ngoài class
     *  + protected phạm vi truy cập chỉ được bên trong class và class kế thừa
     *  + private phạm vi truy cập chỉ bên trong class
     * */

    // 4 - Method là hành động của đối tượng thuộc về 1 class, được định nghĩa thông qua động từ
    // Định nghĩa phương thức
    public function playGame($game)
    {
        echo "Toi dang choi {$game}";
    }

    public function diChoiVoiBan()
    {
        echo 'Toi qua, di an va xem phim';
    }

    private function xinTienGiaDinh()
    {
        echo 100000;
    }

    public function getMoney()
    {
       return $this->money;
       // $this-> là con trỏ nội tại của class -đại diện thay cho tên class, truy cập vào thuộc tính và phương thức
    }

    public function diNhauVoiBanBe()
    {
        // gọi phương thức khác vào trong 1 phương thức trong class đó
        $m = $this->getMoney();
        echo "nhau het cho nay {$m} nay thi ve - khong het cung ve";
    }
}

// 2- object là 1 đối tượng sinh ra từ 1 class nào đó.
// Định nghĩa object: $doiTuong = từ khoá "new" + nameClass
$obj = new Student; // $obj gọi là 1 đối tượng của class A
// new nameClass --> khởi tạo đối tượng

//Truy cập vào thuộc tính của class
$myName = $obj->name;
// echo $myName;

//$myLove = $obj->loving; // nó là thuộc tính protected nên không thể truy cập được
//echo $myLove;

//Truy cập vào phương thức của class
$obj->playGame('AOE'); // dấu () là thực thi phương thức (hay thực thi hàm), truyền tham số nếu có
echo '<br>';

$myMoney = $obj->getMoney();
echo $myMoney;
echo '<br>';

$obj->diNhauVoiBanBe();