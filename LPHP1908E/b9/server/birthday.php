<?php
if(isset($_POST['btnCheck'])){
    $birthday = $_POST['birthday'] ?? '';
    $birthday = strip_tags($birthday);

    if(!empty($birthday)){
        $arrBirthday = explode('-', $birthday);
        $dateBirthday = $arrBirthday[2];
        $monthBirthday = $arrBirthday[1];
        $currentYear = date('Y');

        $newBirthday = "{$currentYear}-{$monthBirthday}-{$dateBirthday}";
        //So sánh với ngày hiện tại
        $today = date('Y-m-d');

        $timeNewBirth = strtotime($newBirthday);
        $timeToday = strtotime($today);

        if($timeToday == $timeNewBirth){
            header("Location: ../index2.php?state=happy&date={$birthday}");
        } elseif($timeToday >= $timeNewBirth) {
            // sinh nhật đã qua
            $rangeTime = $timeToday - $timeNewBirth;
            $day = ceil($rangeTime / 86400);
            header("Location: ../index2.php?state=pass&date={$birthday}&day={$day}");
        } else {
            // sinh nhật chưa tới
            $rangeTime = $timeNewBirth - $timeToday;
            // Tính ra bao ngày nữa tới sinh nhật
            // 24h * 60i * 60s = 86400;
            $day = ceil($rangeTime / 86400);
            header("Location: ../index2.php?state=wait&date={$birthday}&day={$day}");
        }
    }else{
        header('Location: ../index2.php?state=fail');
    }
}