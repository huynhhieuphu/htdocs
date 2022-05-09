<?php
/// ***** Thao tác với hàm header() *****

/// Điều hướng - di chuyển trang

//echo "Vui lòng đợi trong vài giây...";
//sleep(5);
//header("Location: home.php");

/// Trong đoạn code php cần hiển thị dữ liệu (tiếng việt) ra ngoài trình duyệt
/// hỗ trợ định dạng kí tự utf-8
header('Content-Type: text/html; charset= utf-8');

/// ***** Dùng hàm filter_var để kiểm tra tính hợp lệ của dữ liệu *****

/// 1 - filter_var(): Kiểm tra hợp lệ
$email = "nguyenvantrinh@abc.com";
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo 'email hợp lệ';
}else{
    echo 'email KHÔNG hợp lệ';
}
echo '<br>';

$url = 'https://vnexpress.net/ronaldo-ghi-ban-nhieu-thu-hai-lich-su-bong-da-4215809.html';
if(filter_var($url, FILTER_VALIDATE_URL)){
    echo 'url hợp lệ';
}else{
    echo 'url KHÔNG hợp lệ';
}
echo '<br>';

/// 2 - filter_var(): Loại bỏ các kí tự bất không hợp lệ
$url2 = 'https://vnexpress.net/ronaldo-ghi-ban-nhieu-thu-hai-lich-su-bong-da-4215809^&*$%#!~({})[]âuw ơ ợ ố ô .html';
$filterUrl = filter_var($url2, FILTER_SANITIZE_URL);
echo $filterUrl;
echo '<br>';

$numberString = "-abc100abc";
$filterINT = filter_var($numberString, FILTER_SANITIZE_NUMBER_INT);
echo $filterINT;
