<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ajax - jquery</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="search singer..." id="js-txtSearch">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" id="js-btnSearch">search</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2" id="js-loading" style="display: none">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12" id="js-result">

            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#js-btnSearch').click(function(){
                let nameSinger = $('#js-txtSearch').val().trim();
                if(nameSinger.length > 0){
                    // Xử lý ajax
                    $.ajax({
                        // url là địa chỉ gửi dữ liệu lên server
                        url: 'server/ajax.php', // giống thuộc tính action trong html
                        // type là kiểu gửi dữ liệu gửi lên
                        type: 'post', // giống thuộc tính method trong html
                        // data là dữ liệu gửi lên
                        data: {
                            'nameSinger': nameSinger
                        },
                        // beforeSend: trước khi nhận dữ liệu về - thì chúng ta cần làm gì
                        beforeSend: function () {
                            // báo hiệu người vui lòng đợi kết quả trả về
                            // hiển thị show loading
                            $('#js-loading').show();
                        },
                        success: function(result) {
                            // ẩn loading
                            $('#js-loading').hide();
                            // chờ đợi kết quả từ phía server trả về
                            // dữ liệu trả về thông qua tham số trong function(result)
                            result = $.trim(result);
                            if(result === 'blank'){
                                alert('Vui long nhap du lieu...');
                            }else{
                                // hiện thị kết quả lên giao diện
                                $('#js-result').html(result);
                            }
                        }
                    });
                }else{
                    alert('Vui lòng nhập dữ liệu...');
                }
            });
        })
    </script>
</body>
</html>