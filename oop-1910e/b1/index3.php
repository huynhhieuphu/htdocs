<?php

/*
 * public: pham vi truy cập bất cứ đâu (bên trong, class kế thứa và bên ngoài class)
 * protected: phạm vi truy cập (bên trong và class kế thừa)
 * private: phạm vu truy cập chỉ trong class
 * */

class Animal
{
    protected $color = 'white';
    protected static $weight = 300;
    private $name = 'blablabla';
}

// Kế thừa trong class
// lưu ý: trong PHP chỉ có khái niệm đơn kế thừa, không có đa kế thừa (ngôn ngữ java, .net có khái niệm đa kế thừa).
class Dog Extends Animal
{
    public function getColor()
    {
        return $this->color;
    }

    public function getWeight()
    {
        return self::$weight;
    }
}

$dog = new Dog;
//echo $dog->getColor();

// echo Dog::$weight; // SAI - vì phạm vi truy cập protected

//echo $dog->getWeight();

//echo $dog->name; // SAI - vì phạm vi truy cập private


// BÀI TẬP: viết class kiểm tra số nguyên tố
class KiemTraSoNguyenTo
{
    public function show($number)
    {
        return $this->check($number);
    }

    private function check($number)
    {
        if ($number < 2) {
            return false;
        } elseif ($number == 2) {
            return true;
        } else {
            $sqrt = sqrt($number);
            for ($i = 2; $i <= $sqrt; $i++) {
                if ($number % $i == 0) {
                    return false;
                }
            }
            return true;
        }
    }
}

$ktnt = new KiemTraSoNguyenTo;
$num = 35;

if ($ktnt->show($num)) {
    echo "{$num} là số nguyên tố";
} else {
    echo "{$num} không phải nguyên tố";
}



