<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send mail</title>
    <link rel="stylesheet" type href="public/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
            <form action="server/mailv2.php" method="post" class="border my-3 p-3">
                <div class="form-group">
                    <label for="txtEmail">Email</label>
                    <input type="email" name="txtEmail" id="js-txtEmail" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtSubject">Subject</label>
                    <input type="text" name="txtSubject" id="js-txtSubject" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tareaContent">Content</label>
                    <textarea name="tareaContent" id="js-tareaContent" rows="5" class="form-control"></textarea>
                </div>
                <button class="btn btn-primary" type="submit" name="btnSend">Send</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>