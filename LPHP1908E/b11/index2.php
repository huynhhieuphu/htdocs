<?php

// Tiếp tục OOP
/*
 * Những điều cần nhớ:
 * 1 - class
 * 2 - object
 * 3 - thuộc tính (property)
 * 4 - phương thức (method)
 * 5 - trong thuộc tính --> public, protected, private, static
 * 6 - trong phương thức --> public, protected, private, static
 * 7 - Tính thừa kế
 * */
class A
{
    private $a = 10;
    private $b = 20;

    public function sum()
    {
        return $this->a + $this->b;
    }

    /*
     * Cách khai báo static trong phương thức, từ khoá static đứng sau pham vi truy cập
     * */
    public static function kiemTraChanLe()
    {
        // *** Cách truy cập phương thức static với 1 bên không có static

        /*
         * LƯU Ý: $this-> không được dùng trong phương thức có static
         * Trong trường hợp này: phương thức sum() không phải static nên không thể dùng self::
         * GIẢI PHÁP: tạo ra con chỏ $this-> , cụ thể tạo lại object sau đó chỏ tới phương thức có static
         * (new A)->method()
         * */

        if ((new A)->sum() % 2 == 0) {
            return true;
        }
        return false;
    }

    public function checking()
    {
        // *** Cách truy cập phương thức KHÔNG có static với 1 bên KHÔNG có static

        // Cách 1
        //return $this->kiemTraChanLe();

        // Cách 2: Trong lập trình thực tế thường dùng
        return self::kiemTraChanLe();

        // Cách 3
        //return A::kiemTraChanLe();
    }

    public static function checking02()
    {
        // *** Cách truy cập phương thức static với 1 bên có static
        return self::kiemTraChanLe();

        // LƯU Ý: KHÔNG sử dụng con chỏ $this-> trong phương thức static
        // SAI: return $this->kiemTraChanLe();
    }
}

$op = new A;
$sum = $op->sum();
echo $sum;
echo '<br>';

$check = A::kiemTraChanLe();
if ($check) {
    echo 'Chẵn';
} else {
    echo 'Lẻ';
}
echo '<br>';

$checking = $op->checking();
var_dump($checking);
echo '<br>';

$checking02 = A::checking02();
var_dump($checking02);
echo '<br>';