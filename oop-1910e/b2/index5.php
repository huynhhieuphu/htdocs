<?php
// trait oop php

// NOTE: trong PHP không đa kế thừa, chỉ có đơn kế thừa

// trait giúp 1 phần đa kế thừa - để sử dụng được nhiều tính năng khác, trách viết lại nhiều lần.
// dùng trait như 1 class bình thường
trait A
{
    public function getAge()
    {
        return 18;
    }

    public function test()
    {
        echo "Trait A";
    }

    public function demo()
    {
        echo "AAA";
    }
}

trait B
{
    public $name = "Thi No";

    public function getName()
    {
        return $this->name;
    }

    public function test()
    {
        echo "Trait B";
    }

    public function demo()
    {
        echo "BBB";
    }
}

class C
{
    // Sử dụng trait A và B
    use A, B {
        // Trường hợp conflict trait khi các phương thức chồng chéo (cùng tên)
        // Dùng keyword: insteadof để sử dụng phương thức đó
        B::test insteadof A; // sử dụng phương thức B
        A::demo insteadof B; // sử dụng phương thức A
        // Sau khi chiếm quyền sử dụng phương thức, có thể đặt lại tên phương thức dùng keyword: as
        A::test as MyTest; // Sau chiếm quyền sử dụng, có thể đặt tên khác.
    }
}

$c = new C;
echo $c->getAge();
echo "<br>";
echo $c->getName();
echo "<br>";
echo $c->test();
echo "<br>";
echo $c->MyTest();
echo "<br>";
echo $c->demo();