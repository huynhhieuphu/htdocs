<?php
    namespace App\Config;
    // Khái niệm lazy loading - tên file trùng tên class
    // Sau này tự động nạp file và gọi tên class
    class Autoload
    {
        public function __construct()
        {
            spl_autoload_register([$this, '_my_app_autoload']);
        }

        private function _my_app_autoload($file)
        {
            // $file: tên file cần tự động nạp
            // $file: sau này sẽ lấy thông qua namespace và class 
            // Ví dụ: namespace App\Controller\HomeController
            $file = str_replace('\\', '/', trim($file, '\\')) . '.php';
            // convert: App/Controller/HomeController.php
            if(file_exists($file)){
                require_once $file;
            }
        }
    }

    