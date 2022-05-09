<?php
/// Nhúng file index.php vào đây

/// 1.dùng hàm include - vẫn thực thi các câu lệnh bên dưới khi có lỗi
//include 'index.php';

/// 2.dùng hàm require - dừng chương trình luôn khi có lỗi
require 'index.php';

/// Trong include có include_once và require có require_once - chỉ cho phép nạp đúng duy nhất 1 lần.
/// Thông thường sử dụng include_once và require_once: thường nạp các file ít khi thay đổi (thường các file hệ thống).

/// Mỗi lần gửi yêu cầu lên web thì include và require sẽ kiểm tra file đó có tồn tại hay không? sẽ include hoặc require file mới vào, thường sử dụng cho các file thường xuyên thay đổi.
/// Còn đó include_once và require_once chỉ kiểm tra file đó lần đầu tiên có tồn tại hay không? lần sau mặc định file đó đã tồn tại, cứ thế lấy file ban đầu mà ra sử dụng.

$ip = $server['SERVER_ADDR'];
echo "Dia chi ip server la: {$ip}";