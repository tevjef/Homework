$(document).ready(function(){
    var $results = $('.output');
    $results.text("no data")

    var submitAction = function(){
        postRequest($(this));
        return false;
    };

    $('#form-create-account').submit(submitAction);

    function postRequest($form) {
        $results.text("Getting from server...")
        $.post($form.attr('action'), $form.serialize(), function(response, status, xhr){
                $results.text(xhr.responseText)
            },'json')
            .fail(function(xhr, textStatus, errorThrown) {
                $results.text(xhr.responseText)
            });
        return false
    }

});
