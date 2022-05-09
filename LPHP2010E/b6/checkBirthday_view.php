<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Birthday</title>
</head>
<body>
    <h1>Kiểm tra ngày sinh nhật</h1>
    <?php 
        $state = $_GET['state'] ?? '';
    ?>
    <?php if($state === 'error'): ?>
        <h3 style="color:red">Vui long nhap lai sinh nhat</h3>
    <?php endif; ?>
    <form action="controllers/checkBirthday.php" method="POST">
        <label for="birthday">Vui long nhap ngay sinh</label>
        <input type="date" name="birthday">
        <button type="submit" name="btnChkBirthday">Check Birthday</button>
    </form>
    <?php if($state === 'birthday'): ?>
        <h3 style="color:red">Chúc mừng sinh nhật</h3>
    <?php elseif($state === 'wait'): ?>
        <h3 style="color:green">Còn <span style="color:red"><?= $_GET['count'] ?></span> ngày nữa tới sinh nhật</h3>
    <?php elseif($state === 'pass'): ?>
        <h3 style="color:grey">Đã qua ngày sinh nhật</h3>
    <?php endif; ?>
</body>
</html>