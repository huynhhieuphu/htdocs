<?php

// Viết hàm kiểm tra số nguyên tố
function kiemTraSoNguyenTo($n)
{
    if ($n <= 1) {
        return false;
    }
    if ($n == 2) {
        return true;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

$a = 21;
$test = kiemTraSoNguyenTo($a);
if ($test) {
    echo "{$a} la so nguyen to";
} else {
    echo "{$a} khong la so nguyen to";
}
echo "<hr>";

// Từ 1 đến 100 có bao nhiêu số chính phương
// Chinh phương là căn bậc 2 của số đó là số nguyên
// Ví dụ: 81 là chinh phương vì căn bậc 2 của 81 là 9, mà số 9 là số nguyên

function kiemTraDemSoChinhPhuong($n)
{
    $check = (int) sqrt($n);
    // Kiểm tra số nguyên
    if ($check * $check == $n) {
        return true;
    }
    return false;
}

function demSoChinhPhuong($i, $j)
{
    // Duyệt từ 1 đến 100
    $count = 0;
    for ($k = $i; $k <= $j; $k++) {
        if (kiemTraDemSoChinhPhuong($k)) {
            $count++;
        }
    }
    return $count;
}

$kq = demSoChinhPhuong(1, 100);
echo $kq;

echo "<hr>";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// Biến cục bộ - biến khai báo trong hàm - phạm vi hoạt động chỉ nằm trong hàm
/// Biến toàn cục là biến khai báo ngoài hàm

// Sử dụng toàn cục vào trong hàm như thế nào ? -->  sử dụng keyword: global
$x = 100; //biến toàn cục

function totalNumber($y)
{
    // $x biến cục bộ trong hàm không liên quan đến $x bên ngoài
    // Để sử dụng $x toàn cục bên ngoài vào hàm thì dùng keyword: global cho biến $x trong hàm
    global $x; // lúc này $x biến toàn cục ở bên ngoài được gọi vào hàm
    return $x + $y;
}

$total = totalNumber(10);
echo $total; // OUTPUT: 110

echo "<hr>";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// Biến tĩnh trong hàm php --> keyword: static
/// Biến tĩnh là Tự động lưu lại giá trị sau mỗi lần gọi hàm.
/// lưu ý: Đặt bên trong hàm, với từ khoá static

function kiemTraBienStatic()
{
    static $demo = 0;
    $demo++;
    echo $demo . "<br>";
}

kiemTraBienStatic(); // OUTPUT: 1
kiemTraBienStatic(); // OUTPUT: 2
kiemTraBienStatic(); // OUTPUT: 3
kiemTraBienStatic(); // OUTPUT: 4

echo "<hr>";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// Tham trị - là biến truyền vào hàm - đi ra khỏi hàm không bị thay đổi giá trị

$thamTri = 100;
function testThamTri($x)
{
    return $x += 10;
}

echo $thamTri . "<br>"; // OUTPUT: 100
echo testThamTri($thamTri) . "<br>"; // OUTPUT: 110
echo $thamTri . "<br>"; // OUTPUT: 100

echo "<br>";
/// Tham chiếu : biến truyền vào hàm - đi ra khỏi hàm bị thay đổi giá trị theo logic xử lý trong hàm
/// dùng ký tự & (AND) - định nghĩa biến tham chiếu
/// Dùng tham chiếu để sử dụng lại dùng nhớ của biến đó, mà không cần khai báo biến mới.

$thamChieu = 100;
function testThamChieu(&$y)
{
    // &$y : Tham chiếu đến biến $y
    return $y += 20;
}

echo $thamChieu . "<br>"; // OUTPUT: 100
echo testThamChieu($thamChieu) . "<br>"; // OUTPUT: 120
echo $thamChieu . "<br>"; // OUTPUT: 120

// Trong JAVASCRIPT có tham chiếu - tham trị không ? có. Nhưng khác hoàn toàn PHP.
// Tham chiếu không được sử dụng cho các kiểu dữ liệu nguyên thuỷ (kiểu số, kiểu chuỗi, kiểu boolean,...)
// Tham chiếu sử dụng được cho các array, object