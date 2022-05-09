<?php
require '../models/data.php';

$keyworks = $_POST['keywords'] ?? '';
$keyworks = strip_tags($keyworks);

$info = [];
foreach($musician as $value){
    if($keyworks == $value['name']){
        $info = $value;
    }
}

require '../views/result_view.php';

