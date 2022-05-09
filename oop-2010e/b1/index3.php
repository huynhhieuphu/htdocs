<?php
    class User
    {
        public $fullname = 'Van Teo';
        public $username;
        public $email;
        
        // ***Method Magic: phương thức khởi tạo - luôn luôn tự động chạy đầu tiên khi khởi tạo object
        public function __construct($username = '', $email = '')
        {
            echo "This is method: " . __FUNCTION__;
            echo '<hr>';
            $this->username = $username;
            $this->email = $email;
        }

        public function getName()
        {
            return $this->username;
        }

        // ***Method magic: Phương thức call($method, $param)
        // xử lý các phương thức không tồn tại trong class
        public function __call($method, $param)
        {
            print_r($method);
            echo '<br>';
            print_r($param);
            echo '<br>';
            echo "This is method: " . __FUNCTION__;
        }

        // ***Method magic: Phương thức callStatic($name, $arguments)
        // xử lý các phương thức static không tồn tại trong class
        public static function __callStatic($method, $param)
        {
            print_r($method);
            echo '<br>';
            print_r($param);
            echo '<br>';
            echo "This is method: " . __FUNCTION__;
        }

        // ***Method magic: Phương thức get($property)
        // xử lý các thuộc tính get không tồn tại trong class
        public function __get($property)
        {
            print_r($property);
            echo '<br>';
            echo "This is method: " . __FUNCTION__;
        }

        // ***Method magic: Phương thức get($property)
        // xử lý các thuộc tính set không tồn tại trong class
        public function __set($property, $value)
        {
            print_r($property);
            echo '<br>';
            print_r($value);
            echo '<br>';
            echo "This is method: " . __FUNCTION__;
        }

        // ***Method magic: Phương thức huỷ - luôn luôn chạy cuối cùng
        public function __destruct()
        {
            echo '<hr>';
            echo "This is method: " . __FUNCTION__;
        }

    }

    $demo = new User('admin','admin@test.com'); //khi khởi tạo object, phương thức __contruct() sẽ chạy đầu tiền

    echo $demo->getName() . '<br><br>';

    echo $demo->getEmail('emailone@test.com','emailtwo@test.com','emailthree@test.com') . '<br><br>';

    echo USER::getAddress('623/16\'c','phuong 9','quan 8') . '<br><br>';

    echo $demo->phone . '<br><br>';

    $demo->money = '999999999';
    echo '<br><br>';
 