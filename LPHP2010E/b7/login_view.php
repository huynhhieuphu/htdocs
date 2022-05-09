<?php
    require 'helper.php';

    if(checkUserLogin()){
        header('location: ./dashboard.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Cookie & Session</title>
    <link rel="stylesheet" href="public/css/bootstrap.css">
</head>
<body>
    <div class="contaiter">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
                <h1 class="text-center">Demo Login - cookie, session</h1>
                <form action="controllers/handleLogin.php" method="post" class="border p-3">
                    <div class="form-group">
                      <label for="user">Username</label>
                      <input type="text" name="user" id="user" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="pass">Password</label>
                      <input type="password" name="pass" id="pass" class="form-control">
                    </div>
                    <div class="form-check mb-3">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="remember" id="remember">
                        Remember me
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnLogin">Login</button>
                </form> 
            </div>
        </div>
    </div>

</body>
</html>