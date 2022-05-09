<?php
    ////////////////////////////////////////////////////////////////////////////////////////////////////////// namespace - định nghĩa vùng

    // *** Định nghĩa namespace 
    namespace b2\Controllers;

    // ***Lazy Loading - đặt tên file tên class trùng nhau
    Class HomeController
    {
        public $name = 'teo';

        public function index()
        {
            return $this->name . ' - namespace: ' . __NAMESPACE__;
        }
    }