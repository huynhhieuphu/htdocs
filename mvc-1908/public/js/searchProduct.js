$(document).ready(function(){
    $('#btnSearch').click(function () {
        var keywords = $('#keywords').val().trim();

        if(keywords){
            window.location.href = "?c=product&m=search&keywords=" + keywords;
        }

    })
});