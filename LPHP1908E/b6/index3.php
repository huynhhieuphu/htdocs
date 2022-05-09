<?php
/// Sử dụng filter_var (validate data) - kiểm tra tính hợp lệ dữ liệu
/// trả về true hoặc false.

/// Kiểm tra xem đây có phải là email không ?
$email = 'test@gmail.com';

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo 'ĐÚNG, định dạng email';
}else{
    echo 'Email không hợp lệ';
}

echo '<br>';

/// Kiểm tra xem có phải URL không ?
$url = 'http://phptraining.test/LPHP1908E/b6/index3.php';

if(filter_var($url, FILTER_VALIDATE_URL)){
    echo 'Định dạng URL hợp lệ';
}else{
    echo 'URL không hợp lệ';
}

echo '<br>';

/// Kiểm tra có phải là true hay false không ?
$chkFlag = true;
if(filter_var($chkFlag, FILTER_VALIDATE_BOOLEAN)){
    echo 'ĐÚNG, định dạng true hoặc false';
}else{
    echo 'KHÔNG phải định dạng true/false';
}

echo '<br>';

/// Kiểm tra có định dạng integer không ?
/// Lưu ý: trong chuỗi chỉ có số vẫn hiểu là số.
$number = 100;
if(filter_var($number, FILTER_VALIDATE_INT)){
    echo 'ĐÚNG, định dạng interger';
}else{
    echo 'KHÔNG phải định dạng interger';
}

echo '<br>';

/// Xoá dữ liệu không hợp lệ (Sanitizing data)
$email2 = 'học php  dễ mà@gmail.com';
$newEmail = filter_var($email2, FILTER_SANITIZE_EMAIL);
echo $newEmail;
echo '<br>';

$url2 = 'http://phptraining.test/LPHP1908E/b6/index3.php';
$newURL = filter_var($url2, FILTER_SANITIZE_URL);
echo $newURL;
echo '<br>';

$number2 = 'abc123';
$newNumber = filter_var($number2, FILTER_SANITIZE_NUMBER_INT);
echo $newNumber;
echo '<br>';

$number3 = 'abc1,23';
$newNumber2 = filter_var($number3, FILTER_SANITIZE_NUMBER_FLOAT);
echo $newNumber2;
echo '<br>';