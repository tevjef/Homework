$(document).ready(function(){
    $('.login-submit').click( function() {
        $.ajax({
            url: 'https://web.njit.edu/~tj76/login/',
            type: 'post',
            dataType: 'json',
            data: $('form#login').serialize(),
            error: function()
            {
                alert("Request Failed");
            },
            success: function(data) {
                alert(data)
            }
        });
        return false;
    });
});