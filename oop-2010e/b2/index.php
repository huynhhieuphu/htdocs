<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////// final (chống kế thừa - chống ghi đè)

// ***Chống kế thừa
final class A
{
    // toàn bộ thuộc tính và phương thức trong class A k thể kế thừa được
    public function test()
    {
        return 'chong ke thua';
    }
}

// class B extends A
// {
    
// }

// // $b = new B();
// // echo $b->test();

// ***Chống override
class C
{
    final public function test()
    {
        return 'chong ghi de';
    }
}

class D extends C
{
    // Phương thức này không thể ghi đè
    // public function test()
    // {
    //     return 'ghi de';
    // }
}

// $d = new D;
// echo $d->test();
