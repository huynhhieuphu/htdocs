<?php
function getDataVirusCorona(){

    // Sử dụng CURL PHP - API
    // https://api.covid19api.com/summary

    // Bước 1: tạo 1 curl php
    $ch = curl_init();

    // Bước 2: cấu hình 1 số thông số - liên quan đến việc lấy dữ liệu từ api về
    // truy cập vào service - api nào
    curl_setopt($ch, CURLOPT_URL, 'https://api.covid19api.com/summary');

    // không gửi thông số gì thông qua header http/https lên api
    curl_setopt($ch, CURLOPT_HEADER, false);
    // tối đa đợi 30 giây connect vào service api
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    // đợi thực thi curl mới hiển thị data về (true - đợi / false - hiện ra luôn)
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Bước 3: thực thi curl
    $response = curl_exec($ch);

    // Bước 4: ngắt kết nối
    curl_close($ch);

    $data = json_decode($response, true);
    return $data;
}