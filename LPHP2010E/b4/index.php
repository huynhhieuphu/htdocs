<?php
    /////////////////////////////////////////////////////////////////////////////////////////////////////////// Các hàm Xử lý file

    ///*** Mở file
    $file = fopen('../data/test.txt', 'a');
    if($file){
        // echo 'mo file thanh cong';

        // Đọc dữ liệu nằm trong file
            // fread - đọc từ đầu file đến cuối file
            // filesize - kích thước của file
        // $data = fread($file, filesize('../data/test.txt'));

        // // Ghi file
        $content = 'lorem ipsum';
        fwrite($file, $content);

        $file2 = fopen('../data/test.txt', 'r');
        $data = fread($file2, filesize('../data/test.txt'));

        // //đóng file
        fclose($file2);
        fclose($file);
        

        echo $data;
    }else{
        echo 'mo file that bai';
    }
