<?php
// Cẩn kiểm tra xem dữ liệu từ form có dã gửi lên chưa?
// Kiểm tra xem người dùng bấm nút login chưa
if(isset($_GET['btnLogin'])){
    $username = $_GET['uname'] ?? '';
    $password = $_GET['pwd'] ?? '';
    echo "username: {$username} - password: {$password}";
}
