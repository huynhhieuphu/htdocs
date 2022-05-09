<?php
    if(isset($_POST['btnChkBirthday'])){
        $birthday = $_POST['birthday'] ?? '';
        $birthday = strip_tags($birthday);
        
        if(!empty($birthday)){
            $yearBirthday = date('Y');
            $arrBirthday = explode('-', $birthday);
            //print_r($arrBirthday); //Array ( [0] => 1991 [1] => 06 [2] => 01 )
            $birthday = "{$arrBirthday[2]}-{$arrBirthday[1]}-{$yearBirthday}";
            $currentDate = date('d-m-Y');
            //echo $birthday . '<br>' . $currentDate . '<br>';
            $timeBirthday = strtotime($birthday);
            $timeCurrentDate = strtotime($currentDate);
            //echo $timeBirthday . '<br>' . $timeCurrentDate . '<br>';

            if($timeCurrentDate == $timeBirthday){
                //echo 'chuc mung sinh nhat';
                header("Location: ../checkBirthday_view.php?state=birdthday");
            }elseif($timeCurrentDate <= $timeBirthday){
                // echo 'sap toi ngay sinh nhat';
                // 60(giây) * 60(phút) * 24(giờ) = 86400
                $count = ($timeBirthday - $timeCurrentDate) / 86400;
                header("Location: ../checkBirthday_view.php?state=wait&count={$count}");
            }else{
                header("Location: ../checkBirthday_view.php?state=pass");
            }

        }else{
            header("Location: ../checkBirthday_view.php?state=error");
        }
    }