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
        require 'views/movie/index_view.php';
    }
    
    function handleAjax(){
        require '../services/apiMovie.php';

        $keywords = $_GET['keywords'] ?? '';
        $keywords = strip_tags($keywords);

        if(!empty($keywords)){
            $data = getMovie($keywords);
            if(is_array($data)){
                $dataMovie = $data['results'];
                // print_r($dataMovie);exit;
                require '../views/movie/info_view.php';
            }else{
                echo '<h3 class=\'text-center\'>Not Found...</h3>';
            }
            
        }else{
            echo '<h3 class=\'text-center\'>Not Found...</h3>';
        }
    }