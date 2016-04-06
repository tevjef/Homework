$(document).ready(function(){
    var $results = $('.output');
    $results.text("no data")

    var submitAction = function(){
        postRequest($(this));
        return false;
    };

    $('#form-create-account').submit(submitAction);
    $('#form-create-account-no-njit').submit(submitAction);
    $('#form-login-account').submit(submitAction);
    $('#form-create-profile').submit(submitAction);
    $('#form-update-profile').submit(submitAction);

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

});
