<?php
// Trong PHP, không có đa kế thừa chỉ có đơn kế thừa. Trait mục đích giúp đa kế thừa, 1 lớp có thể kế thừa nhiều lớp khác
// dùng keyword: trait để đa kế thừa

// trait gần giống với class
trait Dog
{
    // Khai báo thuộc tính
    public $name = 'lulu';
    protected $age = 3;
    private $weight = 5;

    public function getName()
    {
        return $this->name;
    }

    protected function getAge()
    {
        return $this->age;
    }
}

// Khái niệm đối tượng chỉ sử dụng cho keyword: class, class mới có thể khởi tạo ra đối tượng.
//$dog = new Dog; // SAI - KHÔNG thể khởi tạo đối tượng.

trait Cat
{
    public function getName()
    {
        return "Mimi";
    }

    protected function getAge()
    {
        return 1;
    }
}

// NOTE: các trait không kế thừa nhau được.

class A
{
    // sử dụng trait
    use Dog, Cat {
        // Trường hợp: conflict (xung đột) các phương thức bị chồng chéo
        // dùng keyword: insteadof
        Cat::getName insteadof Dog; // sử dụng getName của Cat
        // sau khi chiếm quyền sử dụng, có thể đặt lại tên phương thức bằng keyword: as
        Cat::getName as myName;

        Dog::getAge insteadof Cat; // sử dụng getAge của Cat
        Dog::getAge as getAgeDog;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function showAge()
    {
        return $this->getAgeDog();
    }
}

$a = new A;

//echo $a->getWeight() . "<br>";
echo $a->getName() . "<br>";
echo $a->showAge() . "<br>";
// chạy phương thức myName (mới đặt tên lại) từ phương thức getName của trait Cat
echo $a->myName() . "<br>";