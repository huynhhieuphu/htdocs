<?php
/// Cách dùng header()
/// khắc phục lỗi font, khi render trực tiếp php mà không hiển thị đúng font tiếng việt
/// lưu ý: viết đầu file php
header('Content-Type: text/html; charset: utf-8;');

/// Cách dùng hàm require, require_once, include và include_once
/// thực hiện nhúng file index.php sang index2.php

/// require: sẽ dừng chương nếu bị lỗi, sẽ không thực thi bất kì đoạn code nào bên dưới. Cho phép nhúng nhiều lần
/// require_once: sẽ dừng chương nếu bị lỗi, sẽ không thực thi bất kì đoạn code nào bên dưới. Chỉ cho phép nhúng 1 lần

// require('index9.php');
// require_once('index.php');

/// include: chỉ thông báo lỗi, các đoạn code bên dưới vẫn tiếp tục thực thi. Cho phép nhúng nhiều lần
/// include_once: chỉ thông báo lỗi, các đoạn code bên dưới vẫn tiếp tục thực thi. Chỉ cho phép nhúng 1 lần

include('index.php');
// include_once('index.php');

/// Trường hợp xài require khi xử lý trên server các file php, js
/// còn trường hợp include khi xử lý về mặt giao diện html.

$number2 = 200;
$total = $number1 + $number2;
echo "Kết quả: " . $total;

/// Ngoài khắc phục lỗi font, hàm header() còn có thể điểu hướng trang
//header('Location: index.php');