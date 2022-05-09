<?php
    // Xoá cookie
    setcookie("trungtamIT", "",time() - 10, "/", "", 0);
    // Quay về Trang index2.php xem còn cookie không ???
    header("Location: index2.php");
?>