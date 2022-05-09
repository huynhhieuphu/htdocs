<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CURL - Covid</title>
</head>
<link rel="stylesheet" href="public/css/bootstrap.min.css">
<body>
    <div class="container-fluid">
        <div class="row my-3">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h1 class="text-center">Thông tin dịch bệnh Virus Corona</h1>
                <div class="text-center" id="loading" style="display: none">
                    <img class="img-fluid" src="public/img/giphy.gif" alt="giphy.gif">
                </div>
            </div>
        </div>
        <div id="result"></div>
    </div>
<script src="public/js/jquery-3.5.1.js"></script>
<script>
    $(function () {
        $.ajax({
            url: 'controllers/CovidController.php?c=handle',
            type: 'GET',
            data: '',
            beforeSend: function(){
                $('#loading').show();
            },
            success: function(data){
                $('#loading').hide();
                $('#result').html(data);
            }
        })
    })
</script>
</body>
</html>