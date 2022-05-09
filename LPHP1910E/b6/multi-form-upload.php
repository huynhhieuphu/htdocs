<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiple Upload file to server</title>
</head>
<body>
</body>
<?php
define("PATH_UPLOAD_FILE", "uploads/images/");

$state = $_GET['state'] ?? '';
$image = $_GET['image'] ?? '';
$arrImage = explode(",", $image);
?>
<form action="server/multi-upload.php" method="post" enctype="multipart/form-data">
    <label for="fileUpload">Chọn nhiều tập tin: </label>
    <!--  Lưu ý: trong thẻ input: cần có thuộc tính multiple và giá trị trong thuộc tính name phải kèm theo kí tự [] (array)  -->
    <input type="file" name="fileUpload[]" id="fileUpload" multiple>
    <button type="submit" name="btnUpload">Upload</button>
</form>
<?php if ($state === 'success' && !empty($arrImage)): ?>
    <?php foreach ($arrImage as $img): ?>
        <img src="<?= PATH_UPLOAD_FILE . $img ?>" alt="<?= PATH_UPLOAD_FILE . $img ?>" style="width: 200px">
    <?php endforeach; ?>
<?php endif; ?>
</body>
</html>