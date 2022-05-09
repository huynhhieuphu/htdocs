<?php
    // Các bước upload file lên server ?

    // định nghĩa nơi chứa file upload
    define('PATH_UPLOAD','../public/uploads/');

    if(isset($_POST['btnUpload'])){
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';

        // 1-kiểm tra có file có đẩy lên server chưa ?
        if(isset($_FILES['upload-file'])){
            // 2 - lấy tên file
            $nameFile = $_FILES['upload-file']['name'];
            // 3 - Định nghĩa nơi chứa file upload 
            // 4 - lấy file tmp
            $tmpFile = $_FILES['upload-file']['tmp_name'];
            $errorFile = $_FILES['upload-file']['error'];
            $typeFile = $_FILES['upload-file']['type'];
            $sizeFile = $_FILES['upload-file']['size'];
            // 4.1 - kiểm tra trạng thái upload có lỗi không ?
            if($errorFile == 0){
                // kiểm tra đuôi file và dung lượng file cho phép ?
                if(checkTypeFile($typeFile) && checkSizeFile($sizeFile)){
                    // 5 - upload file
                    $action = move_uploaded_file($tmpFile, PATH_UPLOAD.$nameFile);
                    if($action){
                        header('location: ../uploadFile_view.php?message=success');
                    }else{
                        header('location: ../uploadFile_view.php?message=fail');
                    }
                }else{
                    header('location: ../uploadFile_view.php?message=error2');
                }
            }else{
                header('location: ../uploadFile_view.php?message=error');
            }
        }
    }

    function checkTypeFile($typeFile = ''){
        $allows = ['image/png', 'image/jpeg', 'image/jpg'];
        if(in_array($typeFile, $allows)){
            return true;
        }
        return false;
    }

    function checkSizeFile($sizeFile){
        //$sizefile kb <= 5mb
        $allowSize = 1024 * 3;
        if($sizeFile <= $allowSize){
            return true;
        }
        return false;
    }