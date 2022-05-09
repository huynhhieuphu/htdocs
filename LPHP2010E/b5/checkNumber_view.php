<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kiểm tra Số Nguyên Tố</h1>

    <?php
        $state = $_GET['state'] ?? '';
        $result = $_GET['result'] ?? '';
        $old = $_GET['old'] ?? '';
    ?>

    <?php if($state === 'empty'): ?>
        <h3 style="color:red">Vui long nhap day so</h3>
    <?php endif; ?>

    <form action="controllers/checkNumber.php" method="post">
        <label for="num">Vui lòng nhập số</label>
        <input type="text" name="num" value="<?= $old ?>">
        <button type="submit" name="btnCheck">Check Number</button><br><br>
    </form>
    
    <?php if($state === 'ok' && $result !== ''): ?>
        <h3>Các số nguyên là <span style="color:blue"><?= $result ?></span></h3>
    <?php elseif($state === 'ok' && $result === ''): ?>
        <h3 style="color:orange">Không có số nguyên số</h3>
    <?php endif; ?>
</body>
</html>