$(document).ready(function () {
    function fetchDataCategory() {
        $.ajax({
            type: 'post',
            url: 'index.php?c=category&m=handleFetchData',
            success: function (result) {
                $('#js-data-category').html(result);
                fetchDataCategory();
            }
        });
    }

    fetchDataCategory();

    $('#btnAdd').on('click', function () {
        let self = $(this);
        let cateName = $('#cateName').val().trim();
        let cateDesc = $('#cateDesc').val().trim();
        let cateParent = $('#cateParent').val().trim();

        if (cateName == '' || cateParent == '') {
            alert('Vui long khong de trong');
        } else {
            $.ajax({
                type: 'post',
                url: 'index.php?c=category&m=handleAdd',
                data: {
                    cateName: cateName,
                    cateDesc: cateDesc,
                    cateParent: cateParent,
                },
                beforeSend: function () {
                    self.text('Loading...');
                },
                success: function (result) {
                    self.text('Add Category');
                    if (result == 'error' || result == 'fail') {
                        alert('Them category that bai');
                    } else {
                        alert('Them category thanh cong');
                        // clear all data input
                        $('#js-form-category')[0].reset();
                    }
                }
            });
        }
    });
});