<?php
    // Kiểm tra người dùng đã gửi dữ liệu lên chưa

    // lưu ý: dữ liệu form gửi lên server thông qua thuộc tính name trong thẻ input (html)
    // 1-Kiểm tra người dùng nhấn nút chưa?
    if(isset($_GET['btnLogin'])){
        // lấy dữ liệu người dùng gửi lên
        $username = $_GET['user'] ?? '';
        $password = $_GET['pass'] ?? '';
        
        echo "username: {$username} - password: {$password}";
    }