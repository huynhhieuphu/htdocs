<?php
    // Khởi tạo session
    session_start();

    // lấy các giá trị của session
    $age = $_SESSION["age"] ?? '';
    $email = $_SESSION["email"] ?? '';

    echo "age: {$age} / email: {$email}";

    // xoá session

    // xoá tất cả session
    // session_destroy();

    // xoá từ session
    // lưu ý: nên kiểm trả có tồn tại hay không? rồi hãy xoá
    if(isset($_SESSION['age'])){
        unset($_SESSION['age']);
    }

    echo "<br>";

    // lấy giá trị cookie mà bên index.php tạo ra
    // php hỗ trợ biến toàn cục của kiểu mảng $_COOKIE
    $cookie = $_COOKIE["myCookie"] ?? "";
    echo "cookie: {$cookie}";

    // xoá cookie
    setcookie("myCookie", "", time() - 10, "/", "", 0);
?>


