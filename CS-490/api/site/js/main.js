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

function onSelectInterest($form) {
    return function( event, ui ) {
        var interest_id = "interest-" + ui.item.interest_id;
        var button_id = "button-" + ui.item.interest_id;

        // Create a shadow input field that will be transferred to the server.
        var input = $('<input id="'+interest_id+'">').attr({'type':'hidden', 'name':'interests[]'}).val(ui.item.interest_id);
        // Add it to the form to be submitted. Problem, there's no way to remove a selection once selected.
        $form.append($(input));

        // Empty the box after select
        $form.find('.interests-select').val("");
        // Display the selected value

        var $button = $('<button  id="'+button_id+'" style="margin-right: 5px;" type="button" disabled="disabled" name="'+interest_id+'">');
        /*   $button.click(function(){
         $('#'+button_id+'').remove();
         $('#'+interest_id+'').remove()
         });*/
        $form.find(".interest-list").append($button.text(ui.item.label));

        return false;
    }
}

function onSelectSingleInterest($form) {
    return function( event, ui ) {
        // Create a shadow input field that will be transferred to the server.
        var input = $("<input>").attr({'type':'hidden', 'name':'interest'}).val(ui.item.interest_id);
        // Add it to the form to be submitted. Problem, there's no way to remove a selection once selected.
        $form.append($(input));
        return false;
    }
}



function onSelectProfessor($form) {
    return function( event, ui ) {
        // Create a shadow input field that will be transferred to the server.
        var input = $("<input>").attr({'type':'hidden', 'name':'professor'}).val(ui.item.professor_id);
        // Add it to the form to be submitted. Problem, there's no way to remove a selection once selected.
        $form.append($(input));
        return false;
    }
}

function onSelectClass($form) {
    return function( event, ui ) {
        // Create a shadow input field that will be transferred to the server.
        var input = $("<input>").attr({'type':'hidden', 'name':'class'}).val(ui.item.class_id);
        // Add it to the form to be submitted. Problem, there's no way to remove a selection once selected.
        $form.append($(input));
        return false;
    }
}

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

