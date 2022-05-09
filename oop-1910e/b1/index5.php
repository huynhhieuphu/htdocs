<?php

// final
/*
// Cấm các class khác kế thừa từ class A
final class A
{
    public function test()
    {
        echo "Test";
    }
}

class B extends A
{

}

$b = new B;
echo $b->test(); // LỖI: class B không kế thừa được class A do có từ khoá final
// Để kế thừa class A thì xoá từ khoá final là xong
*/

class Person
{
    // dùng từ khoá final để chống phương thức không bị override khi kế thừa
    final public function getName()
    {
        echo "Toi ten la Van Teo";
    }
}

class Student extends Person
{
    // Phương thức này đang override (ghi đè) từ phương thức class cha (class Person)
//    public function getName()
//    {
//        echo "Toi ten la Thi No";
//    }

    public function showName()
    {
        // Cách gọi phương thức từ trong class con (class Student), như bình thường.

        // Cách gọi phương thức từ trong class cha (class Student) truyền xuống
        // dùng parent:: khi có phương thức override, nhưng muốn gọi lại phương thức cha
        //parent::getName();
    }
}

$st = new Student;
$st->showName();
