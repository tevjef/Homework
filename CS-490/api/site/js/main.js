$(document).ready(function(){

    var $form_login = $('#form-login');

    $form_login.submit(function() {
        var $this = $(this);
        postRequest($(this), function(response) {
            if (response.error) {
                $(".result").text("Your credentials are not correct")
            } else {
                start_session(response.account.ucid, $this.serializeArray()[1].value);
                if (response.account.profile != null) {
                    window.location.href = "profile.html"   ;
                } else {
                    window.location.href = "create-profile.html";
                }
            }
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

var submitAction = function(){
    postRequest($(this));
    return false;
};

var submitMultipartAction = function(){
    postMultipartRequest($(this));
    return false;
};

function postRequest($form, callback) {
    $.post($form.attr('action'), $form.serialize(), function(response, status, xhr){
            console.log(response);
            callback(JSON.parse(response));
        },'text')
        .fail(function(xhr, textStatus, errorThrown) {
            console.log(xhr.responseText);
            callback(JSON.parse(xhr.responseText));
        });
}

function postMultipartRequest($form, callback) {
    var formData = new FormData($form[0]);
    $.ajax({
        url: $form.attr('action'),
        type: 'POST',
        data: formData,
        async: true,
        cache: false,
        contentType: false,
        processData: false,
        success: function(response, status, xhr){
            callback(xhr.responseText)
        },
        error : function(xhr, textStatus, errorThrown) {
            callback(xhr.responseText)
        }
    });
    return false
}

function start_session(ucid, pass) {
    console.log("-->Starting Session");
    $.post('php/login.php', 'ucid='+ucid+'&pass='+pass, function(response, status, xhr){
            console.log(response);
        },'json')
        .fail(function(xhr, textStatus, errorThrown) {
            console.log(xhr.responseText);
        });
}

function getSession(callback) {
    console.log("-->Getting Session");
    $.ajax({
        url: 'php/getlogin.php',
        type: 'GET',
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function(response, status, xhr){
            console.log(JSON.parse(xhr.responseText));
            callback(JSON.parse(xhr.responseText))
        },
        error : function(xhr, textStatus, errorThrown) {
            callback(JSON.parse(xhr.responseText))
        }
    });
}

function end_session(callback) {
    console.log("-->Ending Session");
    $.ajax({
        url: 'php/logout.php',
        type: 'GET',
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function(response, status, xhr){
            callback(JSON.parse(xhr.responseText))
        },
        error : function(xhr, textStatus, errorThrown) {
            callback(JSON.parse(xhr.responseText))
        }
    });
}
