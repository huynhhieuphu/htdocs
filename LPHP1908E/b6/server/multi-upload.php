<?php
define("UPLOAD_PATH","../upload/images/");

if(isset($_POST['btnUploadMulti'])){
    $files = $_FILES['uploadMultiple'];
    if(isset($files)){
        // Mảng chứa tất cả tên của file
        $arrNameFiles = $files['name'];
        $flagUpload = false;
        $arrFiles = [];

        foreach($arrNameFiles as $key => $nameFile){
            // lấy ra tên của từng file: $nameFile
            // lấy ta tên tạm của từng file: $tmpName
            $tmpName = $files['tmp_name'][$key];
            $errorFiles = $files['error'][$key];
            if($errorFiles === 0) {
                $checkUpload = move_uploaded_file($tmpName, UPLOAD_PATH . $nameFile);
                //lấy ra tất cả tên file upload cho vào 1 mảng
                $arrFiles[] = $nameFile;
            }

            $strNameFile = implode(',', $arrFiles);

            if($checkUpload){
                $flagUpload = true;
            }
        }
        if($flagUpload){
            header("Location:../index4.php?state=success&strFile={$strNameFile}");
        }else{
            header("Location:../index4.php?state=error");
        }
    }
}