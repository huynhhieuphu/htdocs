<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////// Thao tác các hàm require, require_once, include, include_once
/**
 * require - cho phép nhúng (nhiều lần) file khác vào file, khi file nhúng gặp lỗi - sẽ dừng lại chương trình.
 * include - cho phép nhúng (nhiều lần) file khác vào file, khi file nhúng gặp lỗi - thông báo lỗi, chương trình vẫn tiếp tục.
 * require_once, include_once chỉ cho phép nhúng duy nhất 1 lần.
*/

// 1-require
//require 'server.php';
// 2-include
include 'server.php';

$ip = $server['SERVER_ADDR'];
echo "Dia chi ip server {$ip}";