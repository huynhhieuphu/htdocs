<?php
    // Kiểm tra người dùng đã gửi dữ liệu lên chưa

    // lưu ý: dữ liệu form gửi lên server thông qua thuộc tính name trong thẻ input (html)
    // 1-Kiểm tra người dùng nhấn nút chưa?
    if(isset($_POST['btnLogin'])){
        // lấy dữ liệu người dùng gửi lên
        $username = $_POST['user'] ?? '';
        $password = $_POST['pass'] ?? '';
        
        echo "username: {$username} - password: {$password}";
    }