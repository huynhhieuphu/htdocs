<?php
    // ***Định nghĩa abstract class
    abstract class C
    {
        // ***Định nghĩa phương thức abstract 
        // - chỉ khai báo phương thức abstract - phương thức rỗng
        // - phạm vi hoạt động protected, public
        abstract public function demov2();
        // khai báo phương thức bình thường như class
        
        public function testv2()
        {
            return 'override method: '. __METHOD__;
        }
    }

    // ***Định nghĩa abstract class kế thừa từ abstract class C - dùng từ khoá extends 
    abstract class A extends C
    {
        // Cho phép định nghĩa thuộc tính
        public $name = 'teo';
        protected $age = 20;
        private $money = 10000;

        // cho phép định nghĩa phương thức và phương thức abstract
        abstract public function demo();
        abstract protected function testv1();
        
        public function getName()
        {
            return $this->name;
        }

        // ***Bắt buộc override lại phương thức abstract
        public function demov2()
        {
            return 'override method: '. __METHOD__;
        }
    }

    class B extends A
    {
        // ***Bắt buộc override lại tất cả phương thức abstract của abstract A.
        public function demo()
        {
            return 'override method: '. __METHOD__;
        }

        public function testv1()
        {
            return 'override method: '. __METHOD__;
        }
    }

    $b = new B;
    echo $b->demo();
    echo '<br>';
    echo $b->demov2();