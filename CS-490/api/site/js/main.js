$(document).ready(function(){
    var $results = $('.right p')

    var $form_login_account = $('#form-login-account');

    $form_login_account.submit(function() {
        var $form = $(this);
        $.post('../../../login/login.php', $form.serialize(), function(response, status, xhr){
            console.log(response.account.ucid);
            start_session(response.account.ucid);
            getSession();

                window.location.href = 'profile.html';
            },'json')
            .fail(function(xhr, textStatus, errorThrown) {
                $results.text(xhr.responseText)
            });
        return false
    });
});

var qs = (function(a) {
    if (a == "") return {};
    var b = {};
    for (var i = 0; i < a.length; ++i)
    {
        var p=a[i].split('=', 2);
        if (p.length == 1)
            b[p[0]] = "";
        else
            b[p[0]] = decodeURIComponent(p[1].replace(/\+/g, " "));
    }
    return b;
})(window.location.search.substr(1).split('&'));

function start_session(ucid) {
    console.log("-->Starting Session");
    $.post('login.php', 'ucid='+ucid, function(response, status, xhr){
            console.log(response);
        },'json')
        .fail(function(xhr, textStatus, errorThrown) {
            console.log(xhr.responseText);
        });
}

function getSession() {
    console.log("-->Getting Session");
    $.get('getlogin.php', "", function(response, status, xhr){
            console.log(response);
            return response;
        },'json')
        .fail(function(xhr, textStatus, errorThrown) {
            console.log(xhr.responseText);
        });
}

function end_session() {
    console.log("-->Ending Session");
    $.post('logout.php', "", function(response, status, xhr){
            console.log(response);
        },'json')
        .fail(function(xhr, textStatus, errorThrown) {
            console.log(xhr.responseText);
        });
}
