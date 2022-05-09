<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>upload file</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
    define('IMAGE_PATH', 'upload/images/');
    $state = $_GET['state'] ?? '';
    $image = $_GET['file'] ?? '';
    $strFile = $_GET['strFile'] ?? '';
    $arrImage = explode(',', $strFile);
?>

<div class="container">
    <?php if($state === 'success' && !empty($image)): ?>
    <div class="row my-5">
        <div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
            <img src="<?= IMAGE_PATH . $image?>" class="img-fluid" alt="">
        </div>
    </div>
    <?php endif; ?>

    <h2>Single upload file</h2>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 off-set-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
            <form class="border p-1 mt-3" action="server/upload.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="uploadFiles">Tập tin đính kèm:</label>
                    <input type="file" name="uploadFile" id="uploadFile">
                    <button type="submit" class="btn btn-primary" name="btnUpload">Upload File</button>
                </div>
            </form>
        </div>
    </div>

    <?php if($state === 'success' && !empty($arrImage)): ?>
        <div class="row my-5">
            <div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
                <?php foreach($arrImage  as $img): ?>
                    <img src="<?= IMAGE_PATH . $img?>" class="img-fluid" alt="">
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>

    <h2>Multiple upload file</h2>
    <!-- Lưu ý cần phải có: enctype="multipart/form-data"  -->
    <form action="server/multi-upload.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="uploadFiles">Tập tin đính kèm:</label>
            <!--  Lưu ý cần phải có: <input name="[]" multiple>  -->
            <input type="file" name="uploadMultiple[]" id="uploadMultiple" multiple>
            <button type="submit" class="btn btn-success" name="btnUploadMulti">Upload File</button>
        </div>
    </form>

</div>
</body>
</html>