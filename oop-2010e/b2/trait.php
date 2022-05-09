<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////// Trait hỗ trợ php ĐA KẾ THỪA

// ***Định nghĩa trait
trait Cat
{
    public function eat()
    {
        echo 'eat - cat';
    }

    public function sleep()
    {
        echo 'sleep - cat';
    }
}

trait Dog
{
    public function eat()
    {
        echo 'eat - Dog';
    }

    public function sleep()
    {
        echo 'sleep - Dog';
    }
}

class Pet
{
    // Đa Kế Thừa
    // ***dùng từ use - cho phép sử dụng trait Dog, Cat
    // use Cat, Dog;
    // Sử dụng nhiều trait sẽ bị conflict (xung độ - trùng tên nhau)
    use Cat, Dog {
        // *** từ khoá insteadof - để thay thế
        // Cú pháp: traitNameA::method insteadof traitNameB
        Dog::eat insteadof Cat; // Sử dụng phương thức eat của Dog - thay thế - Cat
        Cat::sleep insteadof Dog; 
        // *** từ khoá as - để thay đổi định danh
        // Cú pháp: traitNameA::method as newMethod
        Cat::eat as eatCat; // dùng phương thức eat của Cat - thay đổi tên - thành eatCat, sử dụng với tên mới
    }
}

$pet = new Pet;
echo $pet->eat() . '<br>';
echo $pet->sleep() . '<br>';
echo $pet->eatCat() . '<br>';