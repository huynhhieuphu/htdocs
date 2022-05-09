<?php
// Định nghĩa hàm với tiêu chuẩn phiên bản php 7 trở lên - nghĩa các phiên bản php thấp hơn không hỗ trợ các cú pháp này
declare(strict_types = 1);
// để giúp thông báo lỗi khi làm việc các phiên bản php 7 trở lên - Cú pháp này nên đặt đầu tiên

//*** Quy ước sẵn kiểu dữ liệu tham số truyền vào
function totalNumberOne(int $a, int $b)
{
    echo $a + $b;
}
totalNumberOne(2, 2);
echo "<br>";

// Về mặt giá trị kiểu string bao gồm string và number. Nhưng về mặt dữ liệu thì không đúng.
// Kiểu double về mặt kiểu dữ liệu khác với kiểu float.

//*** Khai báo kiểu dữ liệu kết quả trả về - băt buộc phải có return
function totalNumberTwo(float $a, int $b) : float
{
    return $a + $b;
}
$kq = totalNumberTwo(10, 5);
echo $kq;
echo "<br>";
// dùng void khai bao kiểu dữ diệu kết quả trả về bắt buộc không sử dụng return.
// Kiểu float đã bao gồm số thực (float) và số nguyên (int) nên trả kết quả về mà không lỗi.

/*
 * Khi muốn viết 1 application:
 * Viết OOP (hướng đối tượng)
 * Cách định nghĩa 1 hàm như thế nào ?
 * Cú pháp 1 hàm như thế nào ?
 * Cách xử lý tham số, kết quả như sao ?
 * biến toàn cục, biến cục bộ
 * tham chiếu, tham trị
 */

// BÀI TẬP:
// viết hàm theo php 7 tính giai thừa của 1 số
// Nếu muốn viết 1 hàm trong PHP 7.x cần biết như sau:
// phải biết tư duy kiểu đầu vào là gì ? - kết quả kiểu đầu ra là gì ?
// ví dụ bài tập: kiều đầu vào là số nguyên kiểu dữ liệu integer - kết quả đầu ra số nguyên

function tinhGiaiThua(int $n): int
{
    if ($n < 0) {
        return 0;
    }
    if ($n == 0 || $n == 1) {
        return 1;
    }
    $gt = 1;
    for ($i = 2; $i <= $n; $i++) {
        $gt *= $i;
    }
    return $gt;
}

$kqGiaiThua = tinhGiaiThua(5);
echo $kqGiaiThua;

