$(document).ready(function(){
    var $form_create_account = $('#form-create-account');
    $form_create_account.submit(function(){
        var $this = $(this);
        postRequest($(this), function(response) {
            if (!response.error) {
                start_session(response.account.ucid, $this.serializeArray()[3].value);
                window.location.href = 'create-profile.html'
            } else {
                $('.result').text(response.message);
            }
        });
        return false;
    });
});
