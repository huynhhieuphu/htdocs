<?php
// final trong oop
// 1 - Chống kế thừa bằng final
final class Student
{
    public function learing()
    {
        return "PHP";
    }
}

/*
class IT extends Student
{

}

$it = new IT;
echo $it->learing();

// LỖI: vì không thể kế thừa do có từ khoá final trong class kế thứa class Cha
*/

// 2 - Chống override
class A
{
    final public function demo()
    {
        return "This is method: " . __FUNCTION__ . " of class: " . __CLASS__;
    }

    public function test()
    {
        return "This is method: " . __FUNCTION__ . " of class: " . __CLASS__;
    }
}

class B extends A
{
    /*
    // override
    public function demo()
    {
        return "This is method: " . __FUNCTION__ . " of class: " . __CLASS__;
    }
    // Lỗi: vì không thể overrider được do có từ khoá final trong phương thức kế thứa class cha
    */

    public function test()
    {
        return "This is method: " . __FUNCTION__ . " of class: " . __CLASS__;
    }

    public function checking()
    {
        // return $this->test(); // Đang gọi phương thức test() của class con
        return parent::test(); // Đang gọi phương thức test() của class cha
    }
}

final class C
{
    public function running()
    {
        return "This is method: " . __FUNCTION__ . " of class: " . __CLASS__;
    }
}

$b = new B;
//echo $b->demo();
//echo "<br>";
//echo $b->test();
//echo "<br>";
echo $b->checking();
echo "<br>";

$c = new C;
echo $c->running();
