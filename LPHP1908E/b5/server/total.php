<?php
// Kiểm tra method POST có được gửi lên không? (nói ngôn ngữ tự nhiên thì kiểm tra người dùng nhấn nút Total không ?

if(isset($_POST['btnTotal'])){
    $numOne = $_POST['numberOne'] ?? 0;
    $numOne = is_numeric($_POST['numberOne']) ? $_POST['numberOne'] : '';

    $numTwo = $_POST['numberTwo'] ?? 0;
    $numTwo = is_numeric($_POST['numberTwo']) ? $_POST['numberTwo'] : '';

    // lấy dữ liệu từ thẻ select, option
    $gender = $_POST['gender'] ?? '';
    echo $gender;
    echo '<br>';

    $checkbox= $_POST['agree'] ?? '';
    echo $checkbox;
    echo '<br>';
    // LƯU Ý:
    // Trong thẻ input dùng checkbox mà không có thuôc tính value, khi đánh dấu giá trị trả về là: on.
    // Trong thẻ input dùng checkbox mà có thuộc tính value, khi đánh dấu giá trị trả về là giá trị trong thuộc tính value.
    // còn không đánh dấu vào ô giá trị trả về là null (rỗng)

    $radioChk = $_POST['radioCheck'] ?? '';
    echo $radioChk;
    // LƯU Ý: Cũng như input dùng checkbox
    // Trong thẻ input dùng radio mà không có thuôc tính value, khi đánh dấu giá trị trả về là: on.
    // Trong thẻ input dùng radio mà có thuộc tính value, khi đánh dấu giá trị trả về là giá trị trong thuộc tính value.
    // còn không đánh dấu vào ô giá trị trả về là null (rỗng)

    // Hàm die() dừng chương trình ngay tại đây, các dòng code bên dưới không chạy được. Mục đích test code.
     die();

    // hàm empty kiểm tra giá trị có rỗng không?
    if(empty($numOne) || empty($numTwo)){
        echo 'Vui lòng nhập số';
    }else{
        $sum = $numOne + $numTwo;
        echo $sum;
    }
}