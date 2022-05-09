<?php
    // nhận dữ liệu từ get.php truyền sang qua method GET
    // data sẽ xuất hiện trên url của trình duyệt - hiển thị dữ liệu ra màn hình

    // PHP hỗ trợ 1 biến toàn cục (biến kiểu mảng) dành cho method GET
    // $_GET
    
    // echo '<pre>';
    // print_r($_GET);

    $id = $_GET['id'] ?? ''; // full syntax: isset($_GET['id']) ? $_GET['id'] : '';
    $name = $_GET['name'] ?? '';
    $age = $_GET['age'] ?? '';

    echo "id: {$id} - name: {$name} - age: {$age}";