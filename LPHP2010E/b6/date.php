<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////// Xử lý NGÀY THÁNG NĂM trong PHP

///*** Thiết lập Múi Giờ
// date_default_timezone_set('Asia/Ho_Chi_Minh');

///*** 1/ lấy ra ngày tháng hiện tại trong PHP, trả về kiểu chuỗi

// Định dạng
// d : hiển thị ngày từ 01-31 
// D : hiển thị thứ trong tuần mon-sun
// m : hiển thị tháng bằng số 01-12 
// M : hiển thị tháng bằng chữ jan-dec
// Y : hiển thị đầy đủ số năm 
// y : hiển thị 2 số cuối của năm
// h : hiển thị giờ
// i : hiển thị phút
// s : hiển thị giây
// a: hiển thị AM/PM

$date = date('d/m/Y h:i:sa');
echo $date;
echo '<br>';

///*** 2/ chuyển chuỗi ngày tháng về số giây, tính từ 1/1/1970 00:00:00
$today = '2021-07-30';
$yesterday = '2020-07-29';

$timeToday = strtotime($today);
$timeYesterday = strtotime($yesterday);

echo "Today: {$today} - Time Today: {$timeToday}";
echo '<br>';
echo "Yesterday: {$yesterday} - Time Yesterday: {$timeYesterday}";
echo '<br>';

//So sánh ngày tháng, số giây nào lớn thì ngày tháng lớn
if($timeToday > $timeYesterday){
    echo 'dung';
}else{
    echo 'sai';
}
echo '<br>';

/// 3/ lấy ngày tháng hiện tại bằng số giây, trả về kiểu số (số giây tính từ 1/1/1970 00:00:00)
$time = time();
echo $time;
echo '<br>';

/// 4/ Định dạng kiểu dữ liệu date và datetime trong MySQL
/// 4.1/ date : YYYY-MM-DD
/// 4.2/ datetime : YYYY-MM-DD hh:mm:ss

/// 5/ Dùng hàm mktime() : Tăng giảm - giờ phút giây tháng ngày năm, trả về kiểu số (số giây tính từ 1/1/1970 00:00:00)
$dateTest = mktime(11,0,0,8,(30+3),2021);
echo $dateTest;
// 6/ Chuỗi đổi số giây sang chuỗi định dạng ngày tháng
echo date('Y-m-d h:i:sa', $dateTest);
echo '<br>';

/// 5.1/  Dùng hàm date(format, strtotime(string)) : Tăng giảm - giờ phút giây tháng ngày năm
$dateTest2 = date('Y-m-d h:i:sa', strtotime('+3days')); // + week, days, hours, seconds
echo $dateTest2;

