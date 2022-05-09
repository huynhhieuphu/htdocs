<?php

define("PATH_UPLOAD_FILE", "../uploads/images/");

if(isset($_POST['btnUpload'])){
    $files = $_FILES['fileUpload'];
    if(isset($files)){
        //lưu ý: lúc này là mảng
        $tmpNames = $files['tmp_name'];
        if(!empty($tmpNames)){
            // Lưu ý: Điều kiện tối thiểu để upload file lên server là phải biết:
            // tên file (name)
            // tên file tạm (tmp_name)
            // đường dẫn file

            // lấy ra file name từ key
            $flagUpload = false;
            $strNameFiles = '';

            foreach ($tmpNames as $key => $tmpName){
                $nameFile = $files['name'][$key];
                // Tương tự: $nameFile = $_FILES['fileUpload']['name'][$key];
                $uploads = move_uploaded_file($tmpName, PATH_UPLOAD_FILE . $nameFile);
                $strNameFiles .= ($strNameFiles == '') ? $nameFile : ',' . $nameFile;

                if($uploads){
                    $flagUpload = true;
                }
            }
            if($flagUpload){
                header("Location: ../multi-form-upload.php?state=success&image={$strNameFiles}");
            }else{
                header("Location: ../multi-form-upload.php?state=fail");
            }
        }
    }
}