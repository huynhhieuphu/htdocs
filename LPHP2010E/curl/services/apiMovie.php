<?php

function getMovie($movieName = ''){
    // sử dụng cURL - php
    // api - // https://api.themoviedb.org/3/search/movie?query={$movieName}&api_key=cfe422613b250f702980a3bbf9e90716&page=1

    // BƯỚC 1: khởi tạo cURL
    $ch = curl_init();

    // BƯỚC 2: cấu hình thông số - lấy api
    curl_setopt($ch, CURLOPT_URL, "https://api.themoviedb.org/3/search/movie?query={$movieName}&api_key=cfe422613b250f702980a3bbf9e90716&page=1");
    curl_setopt($ch, CURLOPT_HEADER, false); //	true to include the header in the output.
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30); // The number of seconds to wait while trying to connect. Use 0 to wait indefinitely.
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 

    // BƯỚC 3: thực thi cURL
    $data = curl_exec($ch);

    // BƯỚC 4: dóng cURL
    curl_close($ch);

    return json_decode($data, true);
    // return $data;
}