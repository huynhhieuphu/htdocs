<?php
require_once '../helpers/common.php';

define("PATH_UPLOAD_FILE", "../uploads/images/");

// Kiểm tra người dùng nhấn nút upload chưa ?
if(isset($_POST['btnUpload'])){
    // Kiểm tra người dùng chọn file upload lên chưa ?
    $files = $_FILES['fileUpload'];
    if(isset($files)){
        $tmpName = $files['tmp_name'];
        $nameFile = $files['name'];
        $errorFile = $files['error'];
        $typeFile = $files['type'];
        $sizeFile = $files['size']; // size: đơn vị tính bằng bytes

        // Kiểm tra file có bị lỗi không và kiểm tra tmp_name có giá trị không ?
        if($errorFile == 0 && !empty($tmpName)){
            // Tiến hành upload file
            // Cần kiểm tra nó là 1 bức ảnh và không lớn hơn 3 mb
            if(checkTypeFile($typeFile) && checkSizeFile($sizeFile)){
                // tải lên server
                $upload = move_uploaded_file($tmpName, PATH_UPLOAD_FILE . $nameFile);
                if($upload){
                    header("Location: ../upload-form.php?state=success&img={$nameFile}");
                }else{
                    header("Location: ../upload-form.php?state=fail");
                }
            }else{
                header("Location: ../upload-form.php?state=cancel");
            }
        }else{
            // quay về lại form upload file
            header("Location: ../upload-form.php?state=error");
        }
    }
}