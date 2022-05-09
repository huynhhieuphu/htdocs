<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

if(isset($_POST['btnCheck'])){
    $birthday = $_POST['birthday'] ?? '';
    if(empty($birthday)){
        header('Location:../birthday.php?state=empty');
    }else{
        /*
         * Yêu cầu:
         * - nhập ngày, tháng, năm sinh kiểm tra trễ hoặc sớm ngày, tháng hay đúng ngày nhật
         * -
         * */

        // echo $birthday; // OUTPUT: 1991-12-16 nam,thang,ngay
        $day_birthday = date('d', strtotime($birthday));
        $month_birthday = date('m', strtotime($birthday));
        $day_current = date('d');
        $month_current = date('m');

        // 0 - sinh nhat, 1 - chua toi, 2 - da qua
        if($month_birthday == $month_current){
            if($day_birthday == $day_current){
                header('Location:../birthday.php?state=ok&status=0');
            }elseif($day_birthday > $day_current){
                header('Location:../birthday.php?state=ok&status=1');
            }else{
                header('Location:../birthday.php?state=ok&status=2');
            }
        }elseif($month_birthday > $month_current){
            // chua toi
            header('Location:../birthday.php?state=ok&status=1');
        }else{
            // da qua
            header('Location:../birthday.php?state=ok&status=2');
        }
    }
}