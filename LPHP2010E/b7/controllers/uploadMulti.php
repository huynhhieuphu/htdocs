<?php
    define('PATH_UPLOAD','../public/uploads/');

    if(isset($_POST['btnUpload'])){
        $files = $_FILES['upload-file'];

        if(isset($files)){
            $nameFiles = $files['name'];

            $flag = false;
            $arrFiles = [];

            foreach($nameFiles as $key => $nameFile){
                $tmpFile = $files['tmp_name'][$key];
                $errFile = $files['error'][$key];
                if(!empty($tmpFile) && $errFile == 0){
                    $upload = move_uploaded_file($tmpFile, PATH_UPLOAD . $nameFile);
                    $arrFiles[] = $nameFile;
                }
            }
            
            $strFiles = implode(',', $arrFiles);

            if($upload){
                $flag = true;
            }

            if($flag){
                header("location: ../uploadMultiple_view.php?state=ok&files={$strFiles}");
            }else{
                header("location: ../uploadMultiple_view.php?state=error");
            }
        }
    }

