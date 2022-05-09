<?php
declare(strict_types = 1);
// Giúp để thông báo lỗi khi code sai cú pháp theo chuẩn PHP 7.x trở lên
// Lưu ý: thông thường sẽ khai báo ở đầu file

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Định nghĩa hàm trong php
// Bản chất Hàm tập hợp các công việc cần giải quyết nằm bên trong - chia nhỏ các công việc ra - có thể tái sử dụng lại

// Hàm do lập trình viên tự định nghĩa
// Xây dựng hàm có thể chạy trên tất cả các phiên bản php khác nhau

// Cú pháp: keyword function + nameFunction (tham số nếu có)
function sumNumber($number1 = 9, $number2 = 9)
{
    return $number1 + $number2;
}

// return : trả kết quả về cho tên hàm, thoát khỏi hàm (Các câu lệnh bên dưới return sẽ không được thực thi)


// Sự dụng hàm
// Gọi tên hàm và truyền tham số vào (nếu có)
$sum = sumNumber(10, 10);
echo $sum;

// Tham số thực là tham số truyền vào hàm, khi gọi ra sử dụng.
// Tham số hình thức là khi hàm đang được định nghĩa, thiết lập sẵn tham số nếu không có giá trị truyền vào.

echo "<hr>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Biến toàn cục và biến cục bộ

// Biến toàn cục là biến khai báo ngoài hàm
// Biến cục bộ là biến khai báo trong hàm

$a = 10;

function kiemTraChanLe()
{
    // Cần khai báo cho hàm biết $a là biến toàn cục - bằng cách khai báo keyword global
    // từ khóa global cho phép biến $a phạm vi hoạt động bên trong hàm và bên ngoài hàm
    global $a;
    // Lưu ý: hãy đặt câu lệnh này lên trên các lệnh khác trước khi gọi biến đó ra sử dụng
    $total = 100; // biến này là biến cục bộ chỉ sử dụng trong hàm
    if ($a % 2 == 0) {
        return true;
    }
    return false;
}

var_dump(kiemTraChanLe());

echo "<hr>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Biến Tĩnh

// Dùng từ khoá static
// Biến tĩnh là biến sẽ lưu lại giá trị sau mỗi lần gọi hàm

function checkStatic()
{
    static $count = 0; // biến static sẽ lưu lại giá trị sau mỗi lần gọi hàm ra sử dụng
    $count++;
    echo $count;
    echo "<br>";
}

checkStatic(); //OUTPUT: 1
checkStatic(); //OUTPUT: 2
checkStatic(); //OUTPUT: 3
checkStatic(); //OUTPUT: 4

echo "<hr>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Tham Chiếu (Tham Biến) - Tham Trị trong HÀM

// Trong javascript
//    - Các kiểu nguyên thuỷ không hỗ trợ Tham Chiếu (Tham Biến) - Tham Trị
//    - Chỉ hỗ trợ kiểu dữ liệu array, object

// Trong PHP
// Hỗ trợ đầy đủ

$bienThamChieu = 10;
function kiemTraThamChieu(&$tc)
{
    // Kí hiệu & (AND) là truyền tham chiếu (tham biến)
    // Truyền tham chiếu, Khi biến đó OUTPUT, biến sẽ thay đổi theo logic trong hàm đã xảy ra
    return $tc += 10;
}

echo $bienThamChieu . "<br>"; // OUTPUT: 10
echo kiemTraThamChieu($bienThamChieu) . "<br>"; // OUTPUT: 20
echo $bienThamChieu . "<br>"; // OUTPUT: 20

// Ngược lại truyền giá trị vào hàm, khi biến đó OUTPUT, mà biến không thay đổi đó là tham trị

// Ví dụ khác:
$tc = 10;
$tc += 10;
$tt = &$tc;
echo $tt; // OUTPUT: 20

echo "<hr>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// $$ không phải là cú pháp khai báo biến.
// Chỉ là cú pháp, trỏ tới tham chiếu đến giá trị của nó đến biến khác
$s = 'Hello World';
$l1 = 's';
echo $$l1; // OUTPUT: Hello World
// Giá trị biến l đang tham chiếu tới biến có tên trùng với giá trị.
echo "<br>";

$l2 = 'ss';
echo $$l2;
// OUTPUT: Notice: Undefined variable: ss in /Code/phptraining/LPHP1910E/b2/index2.php on line 105
// Lúc này giá trị biến $l2 không biến trỏ đến biến nào.

echo "<br>";


// BÀI TẬP: Viết hàm cho biết từ 1-100 có bao nhiêu số nguyên số
// Tách 2 hàm: 1 hàm kiểm tra số nguyên số tố - 1 hàm đếm số nguyên tố

function kiemTraSoNguyenTo($n)
{
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

function demSoNguyenTo($a, $b)
{
    $count = 0;
    for ($i = $a; $i <= $b; $i++) {
        if (kiemTraSoNguyenTo($i)) {
            $count++;
        }
    }
    return $count;
}

echo demSoNguyenTo(1, 100);

echo "<hr>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Xây dựng hàm dành riêng cho phiên bản PHP 7.x trở lên
// declare(strict_types = 1);
// Ràng buộc kiểu dữ liệu của tham số truyền vào hàm

function chuViHCN(int $d, int $r)
{
    return ($d + $r) * 2;
}

echo chuViHCN(10, 2);

echo "<br>";

// Ràng buộc kiểu dữ liệu kết quả hàm trả về
function dientichHT(int $a, float $b, float $h): void
{
    // Khi đã ràng buộc kiểu dữ liệu kết quả trả vê hàm bắt buộc có keyword: return.
    // Không thể in ra keyword: echo.
    $kq = (($a + $b) * $h) / 2;
    // $kq = (string) $kq;
    // return $kq;
    echo $kq;
}

dientichHT(1, 2, 3);

echo "<hr>";

// kiểu float (số thực):  đã bao gồm kiểu int (số nguyên), số thực lớn hơn số nguyên.
// Ký hiệu ? (chấm hỏi) - cho phép truyền bất kì kiểu dữ liệu nào.
// Dùng void không cho phép hàm retrun - chấm nhận bất kỳ kiểu dữ liệu nào.

// BÀI TẬP: viết hàm theo chuẩn PHP 7.x trở lên tìm usclnn của 120 và 300
function timUSCLNN(int $a, int $b) : int
{
    if ($a == 0 && $b == 0) {
        return 0;
    } elseif ($a == 0 && $b != 0) {
        // Hàm abs trả về giá trị tuyệt đối
        return abs($b);
    } elseif ($b == 0 && $a != 0) {
        return abs($a);
    }
    $uscln = 1;
    if($a > $b){
        $max = $a;
    }else{
        $max = $b;
    }
    for ($i = 1; $i <= $max; $i++) {
        if ($a % $i == 0 && $b % $i == 0) {
            $uscln = $i;
        }
    }
    return $uscln;
}

echo timUSCLNN(34, 68);

echo "<hr>";

function timBoiSoChungNhoNhat(int $a, int $b) : int{
    return ($a * $b) / (timUSCLNN($a, $b));
}

echo timBoiSoChungNhoNhat(34, 68);