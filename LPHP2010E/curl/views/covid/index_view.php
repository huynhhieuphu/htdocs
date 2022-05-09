<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cURL - API COVID</title>
    <link rel="stylesheet" href="public/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Thong tin covid</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="text-center" id="loading" style="display: none;">
                    <img src="public/images/loading.gif" alt="loading.gif" width="50">
                </div>
                <div id="result"></div>
            </div>
        </div>
    </div>
    
<script src="public/js/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $.ajax({
            'url': 'controllers/covidController.php?m=handleAjax',
            'type': 'post',
            beforeSend : function() {
                $('#loading').show();
            },  
            success: function(response){
                $('#loading').hide();
                $('#result').html(response);
            }
        });
    });
</script>
</body>
</html>