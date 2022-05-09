<?php
// xử lý ngày tháng php

// thiết lập múi giờ
// date_default_timezone_set('Asia/Ho_Chi_Minh');

// Cách 2: cấu hình trên server -> chỉnh file php.ini
// date.timezone = Asia/Ho_Chi_Minh

// lấy ra thời gian hiện tại
$dateCurrent = date('d/m/Y H:i:s'); // định dạng là string
echo $dateCurrent;
echo '<br>';

// định dạng chuẩn ngày tháng trong MySQL
$dateMySQL = date('Y-m-d'); // định dạng là string, nhưng sang MySQL hiểu là datetime

// định dạng chuẩn ngày tháng, giờ phút giây trong MySQL
$dateMySQL2 = date('Y-m-d H:i:s'); // định dạng là string, nhưng sang MySQL hiểu là datetime

// lấy ra SỐ GIÂY tính từ năm 1/1/1970 đến bây giờ
// Chú ý: hiện tại các hàm xử lý ngày tháng trong php thì chỉ dùng đến năm 2035
$time = time();
echo $time;
echo '<br>';

// So sánh ngày tháng trong PHP
$today = date('Y-m-d'); // type: string
$yesterday = '2021-02-01'; // type: string

// hàm strtotime() nó đếm SỐ GIÂY tính từ ngày 1/1/1970 đến ngày tháng cần tính
$timeYesterday = strtotime($yesterday); // type: number
$timeToday = strtotime($today); // type: number

//echo 'today: ' . $today . ' - ' . $timeToday . '<br>';
//echo 'yesterday: ' .date('Y-M-d', $timeYesterday) . ' - ' . $timeYesterday . '<br>';

if($timeYesterday < $timeToday){
    echo 'yes';
}else{
    echo 'fail';
}
echo '<br>';

// Xử lý cộng/trừ thời gian
$date_int = mktime(0, 0, 0, 2, (2 + 14), 2021);
echo $date_int; // trả về số giây
echo '<br>';

// chuyển đổi về định dạng ngày tháng
$myDate = date('d/m/Y', $date_int);
echo $myDate;
echo '<br>';

$myToday = date('d/m/Y', strtotime('-1years')); // +1days, +1months, +1years, -1days, -1months, -1years
echo $myToday;
echo '<br>';