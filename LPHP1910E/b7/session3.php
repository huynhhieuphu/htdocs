<?php
    // Khởi tạo session
    session_start();

    // Xoá các session đã tạo ra
    // 1 - xoá tất cả session, Cách này rất ít dùng vì sẽ có session chúng cần dùng đến.
    //session_destroy();

    // 2 - xoá từng cái session
    if(isset($_SESSION["username"]) && isset($_SESSION["email"])){
        unset($_SESSION["username"]);
        unset($_SESSION["email"]);
    }
    // Sau khi xoá từng session, quay về trang session2.php
    header("Location: session2.php");
?>