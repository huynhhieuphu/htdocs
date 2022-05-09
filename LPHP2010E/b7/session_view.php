<?php
    //khởi tạo session
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo session</title>
</head>
<body>
    <h1>Khởi tạo và tạo session</h1>
    <?php
        //tạo session
        $_SESSION['userSession'] = 'tonyteo';
    ?>
    <a href="home.php">Go to Home</a>
</body>
</html>