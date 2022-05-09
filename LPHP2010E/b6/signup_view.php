<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Ajax</title>
    <link rel="stylesheet" href="public/css/bootstrap.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
                <h1 class="text-center">Dang ky thanh vien</h1>
                <h3 id="messages"></h3>
                <form class="border p-3" id="form-signup">
                    <div class="form-group">
                        <label for="user">Username</label>
                        <input type="text" name="user" id="user" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" name="pass" id="pass" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="text-right">
                        <button class="btn btn-primary" id="btnSigup">Sign up</button>
                    </div> 
                </form>
            </div>
        </div>
    </div>
    
    <script src="public/js/jquery-3.6.0.min.js"></script>
    <script src="public/js/jquery.validate.js"></script>

    <script>
        $(document).ready(function () {
            $('#form-signup').validate({
                rules: {
                    user : {
                        required: true,
                        minlength: 4
                    },
                    pass : {
                        required: true,
                        minlength: 6
                    },
                    email : {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    user: {
                        required: "Vui long nhap username",
                        minlength: "Do dai toi thieu username 4 ki tu"
                    },
                    pass: {
                        required: "Vui long nhap password",
                        minlength: "Do dai toi thieu password 6 ki tu"
                    },
                    email: {
                        required: "Vui long nhap email",
                        email: "Email khong hop le"
                    },
                },
                submitHandler: function(form){
                    // console.log(form);
                    // return false;

                    // Cách 1: lấy toàn bộ dữ liệu input trong form
                    //console.log($(form).serialize());

                    // Cách 2: lấy từng giá trị input trong form
                    let user = $(form).find('input[name=user]').val().trim();
                    let pass = $(form).find('input[name=pass]').val().trim();
                    let email = $(form).find('input[name=email]').val().trim();
                    
                    $.ajax({
                        type: "post",
                        url: "controllers/register.php",
                        data: {
                            username : user,
                            password : pass,
                            email : email,
                        },
                        beforeSend: function (){
                            $(form).find('button#btnSigup').text('Loading...');
                        },
                        success: function (res) {
                            $(form).find('button#btnSigup').text('Sign up');
                            let response = JSON.parse(res);
                            // console.log(response);
                            if(response.alertSuccess != ''){
                                $('#messages').text(response.alertSuccess);
                            }else if(response.alert-error != ''){
                                $('#messages').text(response.alertError);
                            }else{
                                $('#messages').text('');
                            }
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>