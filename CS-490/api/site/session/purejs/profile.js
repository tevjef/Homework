$(document).ready(function(){
    LoadProfile();
    function LoadProfile() {
        var session = getSession();
       /* var ucid = session.message.ucid;
        var pass = session.message.pass;*/
        var profile = GetProfile("tj20", pass);

        console.log(profile);
/*
        $(".first").append()
*/
        console.log(ucid);
        console.log(pass);
    }

    function GetProfile(ucid, password) {
        console.log("-->Getting profile");
        $.post('https://web.njit.edu/~tj76/api/profile/index.php', 'ucid='+ucid+'signed_in_ucid='+ucid+'profile=true', function(response, status, xhr){
                return response;
            },'json')
            .fail(function(xhr, textStatus, errorThrown) {
                console.log(xhr.responseText);
            });
    }
});
