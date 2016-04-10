$(document).ready(function(){
    var $results = $('.output');
    $results.text("no data");

    var submitAction = function(){
        $results.text("Talking to server...");
        postRequest($(this));
        return false;
    };

    var submitMultipartAction = function(){
        $results.text("Talking to server...");
        postMultipartRequest($(this));
        return false;
    };

    var $form_create_account = $('#form-create-account');
    var $form_create_account_no_njit = $('#form-create-account-no-njit');
    var $form_login_account = $('#form-login-account');
    var $form_create_profile = $('#form-create-profile');
    var $form_update_profile = $('#form-update-profile');
    var $form_select_profile = $('#form-select-profile');
    var $form_create_post = $('#form-create-post');

    $form_create_account.submit(submitAction);
    $form_create_account_no_njit.submit(submitAction);
    $form_login_account.submit(submitAction);
    $form_create_profile.submit(submitMultipartAction);
    $form_update_profile.submit(submitMultipartAction);
    $form_select_profile.submit(submitAction);
    $form_create_post.submit(submitAction);
    
    function postRequest($form) {
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


    $form_create_profile.find('.interests-select').autocomplete({
        source: "interests.php",
        minLength: 2,
        // When option is selected
        select: onSelect($form_create_profile)
    });

    $form_update_profile.find(".interests-select").autocomplete({
        source: "interests.php",
        minLength: 2,
        // When option is selected
        select: onSelect($form_update_profile)
    });

    function onSelect($form) {
        return function( event, ui ) {
            // Create a shadow input field that will be transferred to the server.
            var input = $("<input>").attr({'type':'hidden', 'name':'interests[]'}).val(ui.item.interest_id);
            // Add it to the form to be submitted. Problem, there's no way to remove a selection once selected.
            $form.append($(input));
            // Empty the box after select
            $form.find('.interests-select').val("");
            // Display the selected value
            $form.find(".interest-list").append($('<li>').text(ui.item.label));
            return false;
        }
    }

});
