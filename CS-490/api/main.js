$(document).ready(function(){
    var $results = $('.output');
    $results.text("no data")

    var submitAction = function(){
        postRequest($(this));
        return false;
    };

    var submitMultipartAction = function(){
        postMultipartRequest($(this));
        return false;
    };

    $('#form-create-account').submit(submitAction);
    $('#form-create-account-no-njit').submit(submitAction);
    $('#form-login-account').submit(submitAction);
    $('#form-create-profile').submit(submitMultipartAction);
    $('#form-update-profile').submit(submitMultipartAction);
    $('#form-select-profile').submit(submitAction);
    $('#form-create-post').submit(submitAction);

    function postRequest($form) {
        $results.text("Talking to server...")
        $.post($form.attr('action'), $form.serialize(), function(response, status, xhr){
                $results.text(xhr.responseText)
            },'json')
            .fail(function(xhr, textStatus, errorThrown) {
                $results.text(xhr.responseText)
            });
        return false
    }


    function postMultipartRequest($form) {
        var formData = new FormData($form[0]);
        $results.text("Talking to server...");
        $.ajax({
            url: $form.attr('action'),
            type: 'POST',
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response, status, xhr){
                $results.text(xhr.responseText)
            },
            error : function(xhr, textStatus, errorThrown) {
                $results.text(xhr.responseText)
            }
        });
        return false
    }


});
