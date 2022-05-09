<?php
// Biểu thức chính quy trong PHP
// Cú pháp
$inputString = 'Dang hoc php';
// có từ 'php' nằm trong chuỗi không ?
// xây dựng 1 biểu thức chính quy KIỂM TRA điều kiện đó
$pattern = '/[Aa-zZ]/';
/*
 *
 * // chính là cú pháp của biểu thức chính quy,
 * tất cả những gì nằm bên trong nó đều là cú pháp khác của biểu thức chính quy
 *
 * ^ là ký tự cú pháp của biểu thức chính quy giúp tìm ký tự từ đầu
 * dấu đôla $ ngược lại với dấu mũ ^ tìm ký tự cuối trở về
 *
 * [] là cho phép các phần tử nằm trong chuỗi, trong dấu ngoặc vuông dấu trừ - chỉ (range) phạm vi, còn dấu phẩy , chỉ (OR) hoặc.
 *    Lưu ý: dấu ^ nằm trong dấu ngoặc vuông là phủ định lại các phần tử nằm bên trong
 * {} là cho phép độ dài nằm trong chuỗi
 * . là cho phép ký nhập các ký tự bất kỳ
 *
 * */


// làm thế nào để biểu thức chính quy có so khớp - hay diễn đạt đúng yêu cầu không?
if(preg_match($pattern, $inputString)){
    echo 'YES';
} else {
    echo 'NO';
}

echo '<br>';

$number = "xyza";
$pattern2 = "/^[Aa-zZ]{3}./";
if(preg_match($pattern2, $number)){
    echo 'YES';
} else {
    echo 'NO';
}
echo '<br>';

// Bài tập: kiểm tra 1 số có phải là 5 chữ số và chia cho hết cho 5 không?
$input = '12345';
//$pattern3 = '/^[1-9]{1}[0-9]{1}[1-9]{1}[1-9]{1}[0,5]{1}$/';
//$pattern3 = '/^[1-9][1-9][1-9][1-9][0,5]$/';
$pattern3 = '/^[1-9][0-9]{3}[0,5]$/';
if(preg_match($pattern3, $input)){
    echo 'ok';
}else{
    echo 'fail';
}
echo '<br>';

// Bài tập: kiểm tra 1 số phải có 4 chữ số hoặc 3 chữ số hay k,
// số 1 là số lẻ,
// số thứ 2 là số chẵn,
// số thứ 3 là chẵn,lẻ cũng đc,
// số thứ 4 là chia hết cho 5


$input2 = '2135';
//$pattern4 = '/^[0,2,4,6,8][1,3,5,7,9][0-9][0,5]$/';
$pattern4 = '/^[0,2,4,6,8][^0,2,4,6,8]][0-9][0,5]$|^[0,2,4,6,8][^0,2,4,6,8]][0,5]$/';
if(preg_match($pattern4, $input2)){
    echo 'ok';
}else{
    echo 'fail';
}
echo '<br>';

$string = "Hi. I'\m Tony.";
$checkPattern = '/.\/';