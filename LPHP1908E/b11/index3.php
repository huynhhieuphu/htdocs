<?php
// OOP - Tính đa hình (overwrite)

class A
{
    private $name = 'Van Teo';

    public function getName()
    {
        return $this->name;
    }
}

class B extends A
{
    private $name = 'Thi No';

    // overwrite - ghi đè (tính đa hình) viết lại phương thức của class cha
    public function getName()
    {
        return $this->name;
    }

    public function Hello()
    {
        // gọi lại từ phương thức trong class con
        // return $this->getName();

        // Cách gọi từ phương thức trong class cha
        // dùng từ khoá parent::
        return parent::getName();
    }
}

$b = new B;
$name = $b->Hello();
echo $name;
echo '<br>';

