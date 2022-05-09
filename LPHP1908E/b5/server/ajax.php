<?php
    // nhận dữ liệu từ phía client gửi lên
    $nameSinger = $_POST['nameSinger'] ?? '';
    // Hàm strip_tags xoá bỏ các thẻ html nằm trong chuỗi
    $nameSinger = strip_tags(trim($nameSinger));

    if(!empty($nameSinger)){
        // có dữ liệu gửi lên
        $fp = fopen('dataSinger.txt','r');
        if($fp){
            // đọc file từ file
            $data = fread($fp, filesize('dataSinger.txt'));
            // đóng file
            fclose($fp);

            // làm thế nào để so sánh từ khoá người dùng gửi lên có nằm trong file dataSinger.txt không ?
            $arrData = explode(',', $data);
            // print_r($arrData);

            $info = [];
            foreach($arrData as $key => $item){
                if($nameSinger === trim($item)){
                    $info[] = $item;
                }
            }

            // nhúng file list.php vào trong file ajax.php
            require ("../view/list.php");
        }
    }else{
        // không có dữ liệu gửi lên
        echo "blank";
    }