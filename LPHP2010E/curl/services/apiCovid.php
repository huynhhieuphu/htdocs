<?php
    function getData(){
        // sử dụng cURL - php
        // API - https://api.covid19api.com/summary

        // BƯỚC 1: khởi tạo cURL
        $ch = curl_init();

        // BƯỚC 2: cấu hình thông số - lấy api
        curl_setopt($ch, CURLOPT_URL, "https://api.covid19api.com/summary");
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