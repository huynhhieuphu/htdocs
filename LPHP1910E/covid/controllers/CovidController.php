<?php
$method = $_GET['c'] ?? 'index';

switch ($method){
    case 'index':
        index();
        break;
    case 'handle':
        handle();
        break;
}

function index(){
    require 'views/covid/index_view.php';
}

function handle(){
    require '../services/api.php';

    $result = getDataVirusCorona();
    if(is_array($result)){
//        print_r($result['Global']);
        require '../views/covid/covid_view.php';
    }else{
        echo '<h3 class="text-center">can not access api</h3>';
    }

}