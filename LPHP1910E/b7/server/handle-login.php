<?php
session_start();
    if(isset($_POST["btnLogin"])){
        $username = $_POST["username"] ?? '';
        $username = trim(strip_tags($username));
        $password = $_POST["password"] ?? '';
        $password = trim(strip_tags($password));

        $remember = $_POST["remember"] ?? '';
        // Validate data
        if(empty($username) || empty($password)){
            header("Location: ../login.php?state=empty");
        }else{
            //Kiểm tra user và password
            $fopen = fopen('data.txt', 'r');
            if($fopen){
                $data = fread($fopen, filesize("data.txt"));
                fclose($fopen);
                $arrDataUser = explode(",", $data);

                if($username === $arrDataUser[0] && $password === $arrDataUser[1]){
                    // Tạo ra session lưu trữ thông tin người dùng trên server
                    $_SESSION["username"] = $username;
                    // Tạo cookie
                    if($remember === "on"){
                        // set cookie trong vòng 1 giờ
                        setcookie("remember","login_user", time() + 3600, "/", "", 0);
                    }else{
                        // set cookie trong vòng 10 giây
                        setcookie("remember","login_user", time() + 10, "/", "", 0);
                    }
                    // vào trang home
                    header("Location: ../home.php");
                }else{
                    header("Location: ../login.php?state=fail");
                }
            }else{
                // Giả sử: kết nối database thất bại trả về trang login
                header("Location: ../login.php?state=error");
            }

        }
    }