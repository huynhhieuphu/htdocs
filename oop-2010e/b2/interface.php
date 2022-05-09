<?php
    // ***Định nghịa interface
    interface C
    {
        public function testv2();
    }

    // ***Định nghịa interface kế thừa từ interface khác - dùng từ khoá extends
    interface A extends C
    {
        // chỉ khai báo phương thức và phạm vi public, các phương thức bắt buộc rỗng.
        public function test();
        public function demo();
    }

    // ***Định nghĩa class kế thừa từ interface - dùng từ khoá implements
    class B implements A
    {
        //bắt buộc phải override tất cả phương thức kế thừa từ interface B và B kế thừa interface A (NẾU CÓ kế thừa)
        public function test()
        {
            return 'ghi de lai method: ' . __FUNCTION__;
        }

        public function demo()
        {
            return 'ghi de lai method: ' . __FUNCTION__;
        }

        public function testv2()
        {
            return 'ghi de lai method: ' . __FUNCTION__;
        }
    }

    class E extends B
    {
        // không bắt buộc override tất cả phương thức class C    
    }

    // interface không khởi tạo đối tượng. Interface không phải object

    $e = new E;
    echo $e->testv2();