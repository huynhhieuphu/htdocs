<?php
/////////////////////////////////////////////////////////////////////////////////////////////////////////////// Chuỗi (String)

///*** Khai báo chuỗi
// cú pháp: các giá trị nằm trong dấu kép hoặc dấu ngoặc đơn.

$myTest = 'Tony Teo';
$myTest2 = 'Sai Gon';

///*** toán tử nối (ghép) chuỗi bằng dấu chấm (.)
$myTest3 = $myTest . $myTest2;
echo $myTest3;
echo '<br>';

$myTutorial = 'PHP';
//*** Khi nào sử dụng dấu ngoặc kép và dấu ngoặc đơn
// Sử dụng dấu ngoặc kép khi trong chuỗi có chứa 1 biến
$myTest4 = "Tôi đang học $myTutorial";
echo $myTest4 . '<br>';
// hoặc
$myTest5 = "Tôi đang học {$myTutorial}";
echo $myTest5 . '<br>';

// Ngược lại dấu ngoặc đơn chỉ xem đó là 1 chuỗi bình thường
$myTest6 = 'Tôi đang học {$myTutorial}';
echo $myTest6 . '<br>';

//*** dùng dấu chéo để hiểu được kí tự bên trong chuỗi
$myTest7 = 'hoc framework \'laravel\'';
echo $myTest7 . '<br>';
// hoặc cách khác
$myTest8 = "hoc framework 'laravel'";
echo $myTest8 . '<hr>';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////// HÀM xử lý chuỗi

///*** chuyển chuỗi thành mảng
$fruits = 'cam,xa,chanh,gung';
$arrFruit = explode(',', $fruits);
print_r($arrFruit);
echo '<hr>';

///*** chuyển mảng thành chuỗi
$newFruits = implode('-', $arrFruit);
echo $newFruits;
echo '<hr>';

///*** đếm ký tự trong chuỗi
$strTest = 'Gia xang giam lan dau tien sau 3 thang';
echo strlen($strTest);
echo '<hr>';

///*** đếm ký tự trong chuỗi có dấu
$strTest2 = 'Giá xăng giảm lần đầu tiên sau 3 tháng';
echo mb_strlen($strTest2);
echo '<hr>';

///*** đếm từ trong chuỗi
echo str_word_count($strTest);
echo '<hr>';

///*** lặp lại ký tự trong chuỗi
$strTest3 = 'hoc php';
echo str_repeat($strTest3, 5);
echo '<hr>';

///*** Tìm và thay thế trong chuỗi
echo str_replace('php', 'html', $strTest3);
echo '<hr>';

///*** Mã hóa chuỗi md5
$password = '123456';
$password2 = '123456';
echo md5($password);
echo '<br>';    
echo md5($password2);
echo '<hr>'; 

///*** Chuyển chuỗi có chứa các thưc thể html sang 1 chuỗi bình thường (vẫn giữ các thực thể html).
$strTest4 = '<h1><i>Lorem ipsum</i></h1>';
echo htmlentities($strTest4); //OUTPUT: <h1><i>Lorem ipsum</i></h1>
echo '<br>';

$strTest5 = '<script>alert(\'Cac ham thao tac voi chuoi\')</script>';
echo htmlentities($strTest5); //OUTPUT: <scrip>alert('Cac ham thao tac voi chuoi')</script>
echo '<hr>';

///*** Chuyển 1 chuỗi bình thường (có chứa các thưc thể html) sang 1 chuỗi thực thi được các thực thể HTML.
$strTest6 =  html_entity_decode($strTest5);
//echo $strTest6;

///*** Xóa các thưc thể html trong chuỗi (tham sô 2 cho phép giữ các thực thể html).
echo strip_tags($strTest6); //OUTPUT: alert('Cac ham thao tac voi chuoi');
echo '<br>';

///*** Tách chuỗi
$strTest7 = 'hoc lap trinh huong doi tuong php';
echo substr($strTest7, 4, 9); //OUTPUT: lap trinh
echo '<hr>';

///*** Tách chuỗi - với ký tự cho trước - trả về chuỗi, bắt đầu từ ký tự tìm thấy đầu tiên
echo strstr($strTest7, 'g'); //OUTPUT: g doi tuong php
echo '<hr>';

///*** Tìm vị trí ký tự nằm chuỗi
if(strpos($strTest7, 'php') !== false){
    echo 'tim thay nam trong chuoi';
}else{
    echo 'khong thay nam trong chuoi';
}
echo '<hr>';

///*** xóa khoảng trắng 2 bên (mặc định), có thể thiết lập riêng ký tự xóa
$strTest8 = '     Lorem ipsum     ';
$strTest9 = '*****Lorem ipsum*****';
echo trim($strTest8);
echo '<br>';
echo trim($strTest9, '*');
echo '<br>';
echo ltrim($strTest9, '*');
echo '<br>';
echo rtrim($strTest9, '*');