<?php
// Định nghĩa hằng số: đường dẫn upload file
define('UPLOAD_PATH', '../upload/images/');

// Kiểm tra người dùng nhấn bấm upload chưa?
if (isset($_POST['btnUpload'])) {
    // Kiểm tra người dùng đã chọn file upload chưa?
    if (isset($_FILES['uploadFile'])) {
        // Hiển thị thông tin của file từ phía form gửi lên
        // $_FILES là biến toàn cục kiểu mảng - lưu trữ thông tin file
        // print_r($_FILES);

        // kiểm tra file có lỗi hay không ?
        if($_FILES['uploadFile']['error'] === 0){
            // lấy ra tên file
            $nameFile = $_FILES['uploadFile']['name'];
            $tmpName = $_FILES['uploadFile']['tmp_name'];
            // $_FILES['uploadFile']['tmp_name'] không rỗng mới upload
            if($tmpName){
                // tiến hành upload
                $up = move_uploaded_file($tmpName, UPLOAD_PATH . $nameFile);
                if($up){
                    header("location:../index4.php?state=success&file={$nameFile}");
                }else{
                    header("location:../index4.php?state=fail");
                }
            }
        }
    }
}