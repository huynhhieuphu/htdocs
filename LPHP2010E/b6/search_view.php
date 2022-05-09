<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax - php</title>
    <link rel="stylesheet" href="public/css/bootstrap.css">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
                <h3>Tim kiem thong tin ca sy</h3>
                <div class="form-group">
                    <input type="text" name="keyworks" id="js-keyworks" class="form-control">
                    <button type="button" class="btn btn-primary btn-block mt-3" id="btnSearch">Search</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <img src="public/images/loading.gif" alt="loading.gif" id="js-loading" width="50" height="50" style="display: none;">
                <div id="result"></div>
            </div>
        </div>
    </div>

    <script src="public/js/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#btnSearch').click(function(){
                let keywords = $('#js-keyworks').val().trim();
                if(keywords != ''){
                    $.ajax({
                        type: "post",
                        url: "controllers/ajax_search.php",
                        data: {
                            'keywords': keywords
                        },
                        beforeSend: function (){
                            $('#js-loading').show();
                        },
                        success: function (response) {
                            // response là tham số server trả về.
                            $('#js-loading').hide();
                            $('#result').html(response);
                        }
                    });
                }
                return false;
            });
        });
    </script>
</body>
</html>