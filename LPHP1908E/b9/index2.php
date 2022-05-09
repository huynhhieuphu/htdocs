<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Date php - Birthday</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
    $state =  $_GET['state'] ?? '';
    $birthday = $_GET['date'] ?? '';
    $day = $_GET['day'] ?? '';

?>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 offset-mf-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
            <h1 class="text-center my-3">Kiểm tra thời gian sinh nhật</h1>
            <form action="server/birthday.php" method="post" class="border p-3">
                <div class="form-group">
                    <label for="birthday">Nhập ngày sinh nhật: </label>
                    <input type="date" name="birthday" class="form-control" id="birthday" value="<?php echo $birthday; ?>">
                </div>
                <button type="submit" name="btnCheck" class="btn btn-primary">Check</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 offset-mf-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
            <?php if($state === 'fail'): ?>
                <h3 class="text-center my-3 text-danger">Vui lòng nhập ngày sinh nhật</h3>
            <?php endif; ?>
            <?php if($state === 'happy'): ?>
                <h3 class="text-center my-3 text-success">Happy Birthday</h3>
            <?php endif; ?>
            <?php if($state === 'wait'): ?>
                <h3 class="text-center my-3 text-primary">Còn <span class="text-danger  "><?= $day ?></span> ngày mới tới sinh nhật bạn !</h3>
            <?php endif; ?>
            <?php if($state === 'pass'): ?>
                <h3 class="text-center my-3 text-secondary  ">Đã qua <span class="text-danger"><?= $day ?></span> ngày...</h3>
            <?php endif; ?>
        </div>
    </div>

</div>
</body>
</html>