<?php
    // ***Định nghĩa class
    class Student 
    {
        // ***Định nghĩa HẰNG SỐ
        // HẰNG SỐ k phải thuộc tính, cũng không phải static
        // Cú pháp truy cập self::HANG_SO hoặc className::HANG_SO
        const LIMIT_ROWS = 10;

        // Thuộc tính là đặc điểm tính chất của class đối tượng, thông thường miêu tả danh từ hay tính từ
        // ***Định nghĩa thuộc tính (biến)
        public $name = 'Van Teo';
        // ***public cho phép truy cập bên trong, bên ngoài class và kế thừa class.
        protected $phone = '0912345678';
        // ***protected cho phép truy cập bên trong class và kế thừa class.
        private $money = 10000; 
        // ***private chỉ cho phép truy cập bên trong class.

        // ***Định nghĩa thuộc tính static
        public static $age = 30;

        // Phương thức miêu tả qua động từ
        // ***Định nghĩa phương thức (hàm)
        public function workring()
        {
            // ***Truy cập thuộc tính không phải static
            // $this : con trỏ của class, đại diện cho class, để truy cập thuộc tính và phương thức bên trong class.
            // return 'Work for home - ' . $this->name;
        }

        protected function gaming()
        {
            return 'play ball';
        }

        private function learing()
        {
            return 'developer web';
        }

        // ***Định nghĩa phương thức static
        public static function watching(){            
            // ***Truy cập thuộc tính static
            // return 'Batman - ' . Student::$age;

            // dùng self:: thay thế className:: - tương tự $this, để truy cập thuộc tính và phương thức static bên trong class
            // return 'Batman - ' . self::$age;
            
            // *** Truy cập thuộc tính không phải static
            // $obj = new Student();
            // return 'Batman - ' . $obj->phone;
             
            //short syntax
            return 'Batman - ' . (new Student)->phone;
        }

        public function getAge()
        {
            // ***Truy cập thuộc tính static
            // return 'Get age: ' . Student::$age;

            // dùng self:: thay thế className:: - tương tự $this
            return 'Get age: ' . self::$age . ' - rows: ' . self::LIMIT_ROWS;
        }
    } 

    // ***Khởi tạo đối tượng
    $svKeToan = new Student();
    // $svCongNghe = new Student();
    // Lưu ý: không khởi tạo quá nhiều đối tượng

    // ***Truy cập thuộc tính
    $nameKT  = $svKeToan->name;
    // echo $nameKT . '<br>';
    // $phoneKT = $svKeToan->phone; //Uncaught Error: Cannot access protected property
    // echo $phoneKT . '<br>';  // sai vì không thể truy cập được

    // ***Truy cập phương thức
    $workingKT = $svKeToan->workring();
    // echo $workingKT . '<br>';

    $getAge = $svKeToan->getAge();
    echo $getAge . '<br>';

    // ***Truy cập thuộc tính static
    // Không cần khởi tạo đối tượng. gọi tên-class::thuộc-tính
    // Cú pháp: className::$property;
    $ageKT = Student::$age;
    // echo $ageKT . '<br>';

    // ***Truy cập phương thức static
    // Cú pháp: className::method();
    $watchKT = Student::watching();
    // echo $watchKT . '<br>';

    // Phạm vi truy cập HẰNG SỐ
    echo Student::LIMIT_ROWS . '<br>';

