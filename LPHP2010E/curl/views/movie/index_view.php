<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cURL - API MOIVE</title>
    <link rel="stylesheet" href="public/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">search movie</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="keywords" name="keywords" placeholder="Search movie...">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="btnSearch">Search</button>
                    </div>
                </div>
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
        $('#btnSearch').click(function(){
            let keywords = $('#keywords').val().trim();
            if(keywords.length > 0){
                $.ajax({
                    'url' : 'controllers/movieController.php?m=handleAjax',
                    'type' : 'get',
                    'data' : {keywords : keywords},
                    beforeSend : function(){
                        $('#loading').show();
                        $('#result').html('');
                    },
                    success: function(response){
                        $('#loading').hide();
                        $('#result').html(response);
                    }
                })
            }
        })
    });
</script>
</body>
</html>