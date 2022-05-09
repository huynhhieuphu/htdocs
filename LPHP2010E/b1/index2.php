<?php
 // thông báo lỗi php 7.x trở lên
 declare(strict_types = 1);

 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Định nghĩa hàm PHP

 ///*** 1 - Định nghĩa hàm sử dụng cho tất cả các phiên bản php

 function sumNumber($a, $b){
    return $a + $b;
 }

 $demoFuncSum = sumNumber(4, 5);
 echo $demoFuncSum;
 echo '<br>';

 ///*** 2 - Định nghĩa hàm từ phiên bản 7.x trở lên
 function kiemTraChanLe(int $number) : bool {
     if($number % 2 == 0){
         return true;
     }
     return false;
 }

 $num = 10;
 if(kiemTraChanLe($num)){
     echo 'so chan';
 }else{
     echo 'so le';
 }
 echo '<br>';

 // BÀI TẬP: viết hàm theo chuẩn php 7.x trở lên, kiểm tra 1 số có phải là số chinh phương hay không ?

 function kiemTraChinhPhuong(float $number) : bool {
     $sqrt = sqrt($number);
     if(is_int($sqrt)){
         return true;
     }
     return false;
 }

 $num = 12;
 if(kiemTraChinhPhuong($num)){
     echo 'day la chinh phuong';
 }else{
     echo 'khong phai la chinh phuong';
 }
 echo '<br>';

 ///*** biến cục bộ (var local) và biến toàn cục (var global)
 $hello = 'xin chao - '; // biến toàn cục : phạm vi hoạt động chỉ bên ngoài hàm
 function sayHello() {
     // từ khóa global cho phép phạm vi hoạt động bất kỳ nơi nào (trong hàm và ngoài hàm)
     global $hello;
     $goodbye = 'tam biet'; // biến cục bộ : phạm vi hoạt động trong hàm
     echo $hello . $goodbye;
 }
 sayHello();

 echo '<br>';

 ///*** biến static : sẽ lưu lại giá trị của hàm khi mỗi gọi lại hàm đó.
 function demoBienStatic(){
     static $bienStatic = 0; // keyword static có thể thay đổi giá trị từ bên ngoài
     $bienStatic++;
     echo $bienStatic . "<br>";
 }
 demoBienStatic(); //OUTPUT: 1  
 demoBienStatic(); //OUTPUT: 2
 demoBienStatic(); //OUTPUT: 3
 demoBienStatic(); //OUTPUT: 4

 function demoKhongBienStatic(){
    $bienStatic = 0;
    $bienStatic++;
    echo $bienStatic . "<br>";
}
demoKhongBienStatic(); //OUTPUT: 1
demoKhongBienStatic(); //OUTPUT: 1
demoKhongBienStatic(); //OUTPUT: 1
demoKhongBienStatic(); //OUTPUT: 1


 ?>