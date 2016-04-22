$(document).ready(function() {
    GetGroup();

    function GetGroup() {
        $.post('../../group/index.php',
            'group_id=' + qs['id'], function(response, status, xhr){
                $("body").append($("<h2>").text(response.group.name));
                response.group.interests.forEach(function(entry) {
                    $("body").append($("<p>").text(entry.name));
                });

                console.log(response);
                return response;
            },'json')
            .fail(function(xhr, textStatus, errorThrown) {
                console.log(xhr.responseText);
            });
    }
});