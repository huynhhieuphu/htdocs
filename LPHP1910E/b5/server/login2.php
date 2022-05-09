<?php
if(isset($_REQUEST['btnLogin'])){
    $username = $_REQUEST['uname'] ?? '';
    $password = $_REQUEST['pwd'] ?? '';
    echo "username: {$username} - password: {$password}";
}

// lưu ý: sử dụng $_REQUEST khi người lập trình không xác định được method GET hoặc POST là gì mới sử dụng $_REQUEST
// việc sử dụng phương thức $_REQUEST sẽ chậm hơn method GET hoặc POST