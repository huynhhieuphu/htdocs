<?php
    $m = $_GET['m'] ?? 'index';

    switch($m){
        case 'index':
            $m();
            break;
        case 'handleAjax':
            $m();
            break;
    }

    function index(){
        require 'views/covid/index_view.php';
    }
    
    function handleAjax(){
        // nhúng data vào trong hàm handleAjax do đang đứng từ hàm index();
        require '../services/apiCovid.php';

        // echo 'hello function handleAjax';
        $dataCovid = getData();
        if(is_array($dataCovid)){
            $dataGlobal = $dataCovid['Global'];
            $dataCountries = $dataCovid['Countries'];
            require '../views/covid/info_view.php';
        }else{
            echo '<h3 class=\'text-center\'>Can not access API</h3>';
        }
    }