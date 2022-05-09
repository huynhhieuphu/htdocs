<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send mail</title>
    <link rel="stylesheet" type href="public/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
            <form action="controllers/sendmail.php" method="post" class="border my-3 p-3">
                <div class="form-group">
                    <label for="toEmail">To Email:</label>
                    <input type="email" name="toEmail" id="toEmail" class="form-control">
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" id="subject" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" rows="5" class="form-control"></textarea>
                </div>
                <button class="btn btn-primary" type="submit" name="btnSend">Send</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>