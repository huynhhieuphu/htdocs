<?php

    $biensoxemay = '59-Z2 97022'; //59-Z2 970.22

    function bienSoSaiGon($bienso){
        $regex = '/^(41|5\d)-([BCDEFGHKLMNPSTUVXYZ][123])\s?(\d{5}|\d{3}\.?\d{2})$/';
        if(preg_match($regex, $bienso, $match)){
            return $match;
        }
        return false;
    }

    $quan = bienSoSaiGon($biensoxemay);
    echo '<pre>';
    print_r($quan);
    echo '</pre>';
    // if($quan){
    //     echo 'ok';
    // }else{
    //     echo 'error';
    // }
