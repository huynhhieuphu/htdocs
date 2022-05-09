<?php
// Khai báo và xử lý chuỗi trong PHP
// Kiểu dữ liệu: string

$myString = 'Dang hoc PHP';
$myString2 = "Dang hoc PHP Basic";

/**
 * Đối với JAVASCRIPT
 * Ngoài 2 kiểu khai báo chuỗi nháy đơn và nháy kép
 * Thì trong ES6 còn 1 cách khai báo chuỗi nữa đó gọi là Template Sring. (dấu nháy ngược)
 * ví dụ: `string text`
 *        `string text ${bien} string text`
 *
 * Cú pháp nối chuỗi trong JS là dấu cộng +
 */

// Cú pháp nối chuỗi - ghép chuỗi
// Trong PHP sử dụng toán tử dấu chấm . để nối chuỗi

echo $myString . $myString2;
echo "<br>";

// Khi nào dùng nháy kép hoặc nháy đơn ?
// Dùng nháy kép khi trong chuỗi có sử dụng biến,
// và ngược lại khi không có sử dụng biến trong chuỗi dùng nháy đơn.

$number = 10;
$myString3 = '$number là số chẵn';
$myString4 = "$number là số chẵn";
// Cú pháp PHP cũ:
// $myString4 = "{$number} là số chẵn"; //OUTPUT: 10 là số chẵn

echo $myString3;
echo "<br>";
echo $myString4;
echo "<br>";

// Còn sử dụng nháy đơn để nối chuỗi thì làm như sau:
$myString5 = $number . ' là số chẵn';
echo "<br>";



$myString6 = 'Hien dang co dich cum \'Covid-19\'';
echo $myString6;
echo "<br>";

$myString7 = "Hien dang co dich cum \"Covid-19\"";
echo $myString7;
echo "<br>";

$myString8 = "Hien dang co dich cum 'Covid-19'";
$myString9 = 'Hien dang co dich cum "Covid-19"';

echo "<br>";
// Khái niệm number string: trong chuỗi có chứa số

$n1 = '10';
$n2 = 10;
echo $n1 + $n2; // OUTPUT: 20
// Đối với PHP
// Lúc này trong chuỗi chứa số PHP sẽ tự động convert thành cộng trừ nhận chia

/**
 * Đối với Javascript nó hiểu là nối chuỗi
 * var n1 = '10'
 * var n2 = 10;
 * console.log(n1 + n2); // OUTPUT: 1010
 */

/**
 * Lưu ý 1 số trường hợp khác trong PHP:
 *
 * Trường hợp 1:
 * $n1 = '10abc';
 * $n2 = 10;
 * echo $n1 + $n2
 * OUTPUT: Notice: A non well formed numeric value encountered in ...
 * OUTPUT: 20
 *
 * Trường hợp 2:
 * $n1 = 'abc10';
 * $n2 = 10;
 * echo $n1 + $n2
 * OUTPUT: Warning: A non-numeric value encountered in ...
 * OUTPUT: 10
 *
 */

echo "<hr>";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// 1 - Hàm chuyển chuỗi về mảng
$fruit = 'tao, nho, le, buoi';
$arrFruit = explode(', ', $fruit);
print_r($arrFruit);
echo "<br>";

/// 2 - Hàm chuyển mảng về chuỗi
$strFruit = implode(' - ', $arrFruit);
echo $strFruit;
echo "<br>";

/// 3 - Đếm ký tự nằm trong chuỗi
/// Đối với Javascript: Prototype string là length
/// Đối với PHP:

$countFruit = strlen($fruit);
echo $countFruit;
echo "<br>";

// Lưu ý: nếu trong chuỗi có dấu tiếng việt hàm strlen sẽ tính luôn.
$demChuoiCoDau = "Chào Buổi Sáng";
echo strlen($demChuoiCoDau);
echo "<br>";

// Để đếm ký tự mà không có tính dấu thì dùng hàm mb_strlen
echo mb_strlen($demChuoiCoDau);
echo "<br>";

/// 4 - Đếm từ nằm trong chuỗi
$hamDemTuTrongChuoi = "Om mani padme hum.";
echo str_word_count($hamDemTuTrongChuoi);
echo "<br>";

// Lưu ý: Nó cũng giống hàm strlen, nếu trong chuỗi có dấu hàm sẽ tính luôn.
$hamDemTuTrongChuoiCoDau = "Đang học PHP - PHP Basic";
echo str_word_count($hamDemTuTrongChuoiCoDau);
echo "<br>";

/// 5 - Lặp chuỗi
// lưu ý: Hàm str_repeat sẽ trả về 1 chuỗi mới, không làm thay đổi biến truyền vào
echo str_repeat($hamDemTuTrongChuoi, 3);
echo "<br>";

/// 6 - Thay thế chuỗi
echo str_replace("PHP", "Javascript", $hamDemTuTrongChuoiCoDau);
echo "<br>";
// Đối với PHP: nếu trong chuỗi có nhiều từ giống nhau thì nó có thể thay thế hết những từ đó
// Đối với Javascript hàm thay thế chuỗi không thể thay thế toàn bộ từ-cần-thay-thế mà phải kết hợp dùng Biểu thức chính quy (Regex Expression)

/// 7 - Mã hoà chuỗi md5
/// trả về chuỗi 32 ký tự
$password = "khong co mat khau";
echo md5($password);
echo "<br>";

/// 8 - Chuyển các thẻ html thành ký tự bình thường
$html = "<script>alert('Web bạn đã bị hack')</script>";
$htmlText = htmlentities($html);
echo $htmlText; // OUTPUT: <script>alert('Web bạn đã bị hack')</script>

/// 9 - Chuyển đổi thực thể html thành thẻ html
// echo html_entity_decode($htmlText);
echo "<br>";

/// 10 - Cho phép bóc tách các thẻ html nằm trong chuỗi, các thẻ liệt kê trong tham số thứ 2 sẽ được giữ lại, ngược lại thì sẽ bỏ đi các thẻ khác
$title = "<h1><u><i>Hello World</i></u></h1>";
echo $title;
echo "<br>";
echo strip_tags($title, "<h1>, <u>");
echo "<br>";

// Mặc định loại tất cả thẻ html chỉ lấy text, khi không truyền tham số thứ 2
echo strip_tags($title);
echo "<br>";

/// 11 - cắt chuỗi từ vị trí bắt đầu cho trước và cắt ra bao nhiêu ký tự
$newPass = substr($password, 9, 8);
echo $newPass;
echo "<br>";

/// 12 - tách chuỗi từ 1 ký tự cho trước và cắt cho đến hết chuỗi
$title2 = "Sinh vien van duoc nghi hoc vi co dich cum";
echo strstr($title2, "nghi");
echo "<br>";

/// 13 - tìm kiếm ký tự có nằm trong chuỗi hay không
/// Trong javascript: String.prototype.indexOf trả về vị trí của chuỗi trong chuỗi khác. Nếu không tìm thấy, nó sẽ trở lại -1
/// Trong php: không tìm thấy trả false, tìm thấy trả về vị trí
if(strpos($title2, "hoc") !==  false){
    // Trường hợp tìm thấy
    echo strpos($title2, "hoc"); // trả về vị trí
}else{
    echo "Không tìm thấy";
}
echo "<br>";

/// 14,15 - Loại bỏ các ký tự bên trái, bên phải và 2 bên của 1 chuỗi
/// Nếu không tồn tham số thứ 2, mặc định sẽ xoá đi khoảng trắng
$title3 = "***sap den tet roi***";
echo trim($title3, "*");
echo "<br>";
echo ltrim($title3, "*");
echo "<br>";
echo rtrim($title3, "*");
echo "<br>";

/// Thực chất đó là mảng bao gồm các ký tự, truy cập từng phần tử
$title4 = "asdfgh";
echo $title4[0];