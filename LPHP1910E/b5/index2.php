<?php
    // nhận dữ liệu từ index.php truyền qua thông method get
    // data sẽ xuất hiện trên URL của trình duyệt - lấy dữ liệu xuống
    // PHP sẽ hỗ trợ 1 biến kiểu mảng (biến toàn cục)
    // $_GET

$id = $_GET['id'] ?? ''; // isset($_GET['id']) ? $_GET['id'] : '';
$name = $_GET['name'] ?? '';
$age = $_GET['age'] ?? '';

echo "id - {$id} / name - {$name} / age - {$age}";
