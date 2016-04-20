$(document).ready(function(){

    getSession();

    var $results = $('.right p')

    var $form_login_account = $('#form-login-account');

    $form_login_account.submit(function() {
        var $form = $(this);
        $.post('../../login/login.php', $form.serialize(), function(response, status, xhr){
            console.log(response.account.ucid);
            start_session(response.account.ucid);
            getSession();
            //end_session();
                $results.text(response.message);
            },'json')
            .fail(function(xhr, textStatus, errorThrown) {
                $results.text(xhr.responseText)
            });
        return false
    });

    function start_session(ucid) {
        console.log("-->Starting Session");
        $.post('../../session/login.php', 'ucid='+ucid, function(response, status, xhr){
                console.log(response.message);
            },'json')
            .fail(function(xhr, textStatus, errorThrown) {
                console.log(xhr.responseText);
            });
    }

    function getSession() {
        console.log("-->Getting Session");
        $.get('../../session/getlogin.php', "", function(response, status, xhr){
                console.log(response.message);
            },'json')
            .fail(function(xhr, textStatus, errorThrown) {
                console.log(xhr.responseText);
            });
    }

    function end_session() {
        console.log("-->Ending Session");
        $.post('../../session/logout.php', "", function(response, status, xhr){
                console.log(response.message);
            },'json')
            .fail(function(xhr, textStatus, errorThrown) {
                console.log(xhr.responseText);
            });
    }
});
