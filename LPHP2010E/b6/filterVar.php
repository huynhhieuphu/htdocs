<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////// làm việc hàm filter_var();


// 1 - trường hợp xác thực
$checkUrl = 'https://www.php.net';
if(filter_var($checkUrl, FILTER_VALIDATE_URL)){
    echo 'dung url';
}else{
    echo 'khong phai url';
}
echo '<br>';

$checkEmail = 'root@test.com';
if(filter_var($checkEmail, FILTER_VALIDATE_EMAIL)){
    echo 'dung email';
}else{
    echo 'khong phai email';
}
echo '<br>';

// 2 - loại bỏ ký tự không hợp lệ
$filterEmail = '<h1>root@!@#$%^&*(test.com</h1>';
$newEmail =  filter_var($filterEmail, FILTER_SANITIZE_EMAIL);
echo $newEmail;
echo '<br>';

$filterUrl = 'https::://<b>www</b>.php!@#$%^&*().net^&*$%#!~({})[]âuw ơ ợ ố ô ';
$newUrl =  filter_var($filterUrl, FILTER_SANITIZE_URL);
echo $newUrl;
