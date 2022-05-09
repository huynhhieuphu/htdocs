<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload file to server</title>
</head>
<body>
</body>
    <?php
        define("PATH_UPLOAD_FILE", "uploads/images/");
        $img = $_GET['img'] ?? '';
        $state = $_GET['state'] ?? '';
    ?>

    <form action="server/upload.php" method="post" enctype="multipart/form-data">
        <label for="fileUpload">Chọn tập tin: </label>
        <input type="file" name="fileUpload" id="fileUpload">
        <button type="submit" name="btnUpload">Upload</button>
    </form>

    <?php if($state === 'success' && $img !== ''): ?>
        <img src="<?= PATH_UPLOAD_FILE . $img ?>">
    <?php endif; ?>
</body>
</html>