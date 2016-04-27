$(document).ready(function(){

    var ucid;
    var pass;

    getSession(function(response) {
        ucid = response.message.ucid;
        pass = response.message.pass;

        $(".logged-in-as").text("Logged in as " + ucid);
    });

    var $form_create_profile = $('#form-create-profile');

    var validation_failed = false;

    $form_create_profile.submit(function(){
        checkInput($form_create_profile.find('#first-name'));
        checkInput($form_create_profile.find('#last-name'));
        checkInput($form_create_profile.find('#about'));
        checkInput($form_create_profile.find('#class-select'));
        checkInput($form_create_profile.find('#relationship-select'));
        checkInput($form_create_profile.find('#gender-select'));

        if (validation_failed) {
            return false;
        }

        var $from = $("<input>").attr({'type':'hidden', 'name':'ucid'}).val(ucid);
        $form_create_profile.append($from);
        postMultipartRequest($(this), function(response) {
            if (!response.error) {
                window.location.href = 'profile.html'
            } else {
                $('.result').text(response.message);
            }
        });
        return false;
    });

    $form_create_profile.find(".interests-select").autocomplete({
        source: "../../interests.php",
        minLength: 2,
        // When option is selected
        select: onSelectInterest($form_create_profile)
    });

    function checkInput($input) {
        if ($input.val() == '' || $input.val() == null || $input.val() == undefined) {
            $('.result').text('Must provide all fields');
            validation_failed = true;
        }
    }
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
});
