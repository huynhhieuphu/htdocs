<?php
/// Các hàm xử lý ngày tháng trong PHP

/// 1 - Cách 1: Thiết lập múi giờ trong file php, vị trí là đặt đầu file
date_default_timezone_set('Asia/Ho_Chi_Minh');

/// Cách 2: thiết lập múi giờ trong file php.ini

/// 2 - lấy ra ngày tháng hiện tại trong PHP
/*
 * format:
 *         d: hiển thị ngày
 *         D: hiển thị thứ
 *         m: hiển thị tên tháng
 *         M: hiển thị số tháng
 *         y: hiển thị 2 con số cuối của năm
 *         Y: hiển thị đầy đủ số năm
 * */
$dt = date('d-m-Y h:i:s');
// echo $dt;

/// 3 - làm thế để so sánh ngày tháng???
$today = '2020-12-30';
$yesterday = '2020-12-31';
// chuyển ngày tháng về số giây tính từ 01/01/1970
$timeToday = strtotime($today);
$timeYesterday = strtotime($yesterday);
echo $timeToday;
echo '<br>';
echo $timeYesterday;
echo '<br>';
if($timeToday < $timeYesterday){
    echo 'hôm nay nhỏ hơn ngày mai';
}else{
    echo 'sai';
}
echo '<br>';

/// 4 - lấy số giây đúng thời điểm hiện tại đang tiếp diễn
$time = time();
echo $time;
echo '<br>';

/// 5 - Định dạng kiểu dữ liệu date và datetime trong MySQL
/// 5.1 - date: mm-dd-yyyy (lưu ý: không chấp nhấn bất kì định dạng nào khác)
/// 5.2 - datetime: mm-dd-yyyy hh:ii:ss

$currentMonth = date('m');
echo $currentMonth;
echo '<br>';

/// 6 - Xử lý cộng ngày tháng
/// cú pháp: mktime($gio, $phut, $giay, $thang, $ngay, $nam);
$date_int = mktime(0,0,0, 11,(20 + 12), 2020);
echo $date_int;
echo '<br>';

/// 7 - chuyển đổi số giây (type: number) ra định dạng chuỗi ngày tháng năm
$day = date('d-m-Y', $date_int);
echo $day;
echo '<br>';

/// Một cách khác để cộng (hoặc trừ) day, week, month (lưu ý: cộng (trừ) year)
$testDay = date('d-m-Y', strtotime('+3day'));
echo $testDay;
