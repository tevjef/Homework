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
            async: true,
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

    var $form_create_account = $('#form-create-account');
    var $form_create_account_no_njit = $('#form-create-account-no-njit');
    var $form_login_account = $('#form-login-account');
    var $form_delete_account = $('#form-delete-account');

    var $form_create_profile = $('#form-create-profile');
    var $form_update_profile = $('#form-update-profile');
    var $form_select_profile = $('#form-select-profile');
    var $form_search_profile_interest = $('#form-search-profile-interest');
    var $form_search_profile_name = $('#form-search-profile-name');
    var $form_search_profile_ucid = $('#form-search-profile-ucid');
    var $form_create_post = $('#form-create-post');
    var $form_remove_post = $('#form-remove-post');

    var $form_select_group = $('#form-select-group');
    var $form_delete_group = $('#form-delete-group');
    var $form_search_group_name = $('#form-search-group-name');
    var $form_search_group_interest = $('#form-search-group-interest');
    var $form_list_group = $('#form-list-group');
    var $form_create_group = $('#form-create-group');
    var $form_update_group = $('#form-update-group');
    var $form_create_group_post = $('#form-create-group-post');

    var $form_create_review = $('#form-create-review');
    var $form_select_review = $('#form-select-review');
    var $form_select_student_review = $('#form-select-student-review');
    var $form_delete_student_review = $('#form-delete-student-review');



    $form_create_account.submit(submitAction);
    $form_create_account_no_njit.submit(submitAction);
    $form_login_account.submit(submitAction);
    $form_delete_account.submit(submitAction);

    $form_create_profile.submit(submitMultipartAction);
    $form_update_profile.submit(submitMultipartAction);
    $form_select_profile.submit(submitAction);
    $form_search_profile_interest.submit(submitAction);
    $form_search_profile_name.submit(submitAction);
    $form_search_profile_ucid.submit(submitAction);
    $form_create_post.submit(submitAction);
    $form_remove_post.submit(submitAction);

    $form_select_group.submit(submitAction);
    $form_delete_group.submit(submitAction);
    $form_search_group_name.submit(submitAction);
    $form_search_group_interest.submit(submitAction);
    $form_create_group.submit(submitAction);
    $form_update_group.submit(submitAction);
    $form_create_group_post.submit(submitAction);
    $form_list_group.submit(submitAction);

    $form_create_review.submit(submitAction);
    $form_select_review.submit(submitAction);
    $form_select_student_review.submit(submitAction);
    $form_delete_student_review.submit(submitAction);

    $form_create_profile.find('.interests-select').autocomplete({
        source: "../interests.php",
        minLength: 2,
        // When option is selected
        select: onSelectInterest($form_create_profile)
    });

    $form_update_profile.find(".interests-select").autocomplete({
        source: "../interests.php",
        minLength: 2,
        // When option is selected
        select: onSelectInterest($form_update_profile)
    });

    $form_search_profile_interest.find(".interests-select").autocomplete({
        source: "../interests.php",
        minLength: 2,
        // When option is selected
        select: onSelectSingleInterest($form_search_profile_interest)
    });

    $form_create_group.find(".interests-select").autocomplete({
        source: "../interests.php",
        minLength: 2,
        // When option is selected
        select: onSelectInterest($form_create_group)
    });

    $form_update_group.find(".interests-select").autocomplete({
        source: "../interests.php",
        minLength: 2,
        // When option is selected
        select: onSelectInterest($form_update_group)
    });

    $form_search_group_interest.find(".interests-select").autocomplete({
        source: "../interests.php",
        minLength: 2,
        // When option is selected
        select: onSelectSingleInterest($form_search_group_interest)
    });

    $form_create_review.find(".class-select").autocomplete({
        source: "../classes.php",
        minLength: 2,
        // When option is selected
        select: onSelectClass($form_create_review)
    });

    $form_create_review.find(".professor-select").autocomplete({
        source: "../professors.php",
        minLength: 2,
        // When option is selected
        select: onSelectProfessor($form_create_review)
    });

    $form_select_review.find(".professor-select").autocomplete({
        source: "../professors.php",
        minLength: 2,
        // When option is selected
        select: onSelectProfessor($form_select_review)
    });

    function onSelectInterest($form) {
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
            var input = $("<input>").attr({'type':'hidden', 'name':'professor_id'}).val(ui.item.professor_id);
            // Add it to the form to be submitted. Problem, there's no way to remove a selection once selected.
            $form.append($(input));
            return false;
        }
    }

    function onSelectClass($form) {
        return function( event, ui ) {
            // Create a shadow input field that will be transferred to the server.
            var input = $("<input>").attr({'type':'hidden', 'name':'class_id'}).val(ui.item.class_id);
            // Add it to the form to be submitted. Problem, there's no way to remove a selection once selected.
            $form.append($(input));
            return false;
        }
    }
});
