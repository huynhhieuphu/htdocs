<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////// Tính Kế thừa (extends) và tính đa hình (override)

/// Trong PHP chỉ Đơn kế thừa, một lớp chỉ kế thừa từ đúng 1 lớp khác.
/// Để Đa kế thừa dùng kỹ thuật Trait. Đa kế thừa là 1 class kế thừa từ nhiều class khác.

class Animals
{
    public $name = 'Tom';
    protected $color = 'blue';

    public function run()
    {
        return $this->name . ' run';
    }

    public function stop()
    {
        return $this->run();
    }
}

// ***Định nghĩa kế thừa bằng từ khoá extends
class Cat extends Animals
{
    public $name = 'Mimi';

    public function colors()
    {
        return $this->color;
    }

    // ***OVERRIDE lại PHƯƠNG THỨC từ class cha
    public function run()
    {
        return $this->name . ' stop';
    }
    
    public function stop()
    {
        // ***Lấy giá trị từ phương thức class chính nó
        // return $this->run(); //OUTPUT: Mimi stop

        // ***Lấy giá trị từ phương thức class cha
        return parent::run(); //OUTPUT: Tom stop
    }
}

$meo = new Cat;
echo $meo->colors() . '<br>';
echo $meo->stop() . '<br>';
