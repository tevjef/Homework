$(document).ready(function(){

    var logged_in_ucid;
    var pass;
    var isAdmin;

    getSession(function(response) {
        logged_in_ucid = response.message.ucid;
        pass = response.message.pass;
        isAdmin = response.message.admin;

        $(".logged-in-as").text("Logged in as " + logged_in_ucid);
    });

    console.log(qs['user']);
    if (qs['user'] != null) {
        SearchUserName(qs['user'])
    } else if (qs['interest'] != null) {
        if (qs['type'] === "profile") {
            SearchUserInterest(qs['interest'])
        } else if (qs['type'] === "group") {
            SearchGroupInterests(qs['interest'])
        }
    } else if (qs['group'] != null) {
       SearchGroupName(qs['group'])
    }


    function SearchUserName(name) {
        SearchProfile(name, function(response) {
            if (!response.error) {
                for (var i in response.profiles) {
                    $('#search-results').append(MakeProfile(response.profiles[i]));
                }
            }
        });
    }

    function SearchUserInterest(interest) {
        SearchProfileInterest(interest, function(response) {
            if (!response.error) {
                for (var i in response.profiles) {
                    $('#search-results').append(MakeProfile(response.profiles[i]));
                }
            }
        });
    }

    function SearchGroupName(name) {
        SearchGroup(name, function(response) {
            if (!response.error) {
                for (var i in response.groups) {
                    $('#search-results').append(MakeGroup(response.groups[i]));
                }
            }
        });
    }

    function SearchGroupInterests(interest) {
        SearchGroupInterest(interest, function(response) {
            if (!response.error) {
                for (var i in response.groups) {
                    $('#search-results').append(MakeGroup(response.groups[i]));
                }
            }
        });
    }

    function MakeProfile(person) {
        var $listing = $('<div class="generic-listing"></div>');
        $listing.append('<a href=profile.html?id='+person.ucid+'> <img src="'+person.image+'"></a>');

        var $right = $('<div class="right"></div>');
        $right.append('<a class="profile-link" href=profile.html?id='+person.ucid+'>'
            +person.first_name + ' ' + person.last_name+'</a>');
        $right.append('<p>'+person.username+'</p>');

        $listing.append($right);
        $listing.append('<div class="clearfix"></div>');
        return $listing
    }

    function MakeGroup(group) {
        var $listing = $('<div class="generic-listing"></div>');
        $listing.append('<a href="group.html?id='+group.id+'">'+group.name+'</a>');

        $listing.append('<p><a style="font-size: 12px; color: #757575;" href="profile.html?id='+group.ownerId+'"> Owner: '+group.ownerUcid+'</a></p>');

        $listing.append('<div class="clearfix"></div>');
        return $listing
    }
});

function SearchProfile(name, callback) {
    var params = {
        name:name};

    callback(JSON.parse($.ajax({
        type: "POST",
        url: '../profile/search.php',
        data: $.param(params),
        async: false
    }).responseText));
}

function SearchProfileInterest(interest, callback) {
    var params = {
        interest:interest};

    callback(JSON.parse($.ajax({
        type: "POST",
        url: '../profile/search.php',
        data: $.param(params),
        async: false
    }).responseText));
}

function SearchGroup(name, callback) {
    var params = {
        keyword:name};

    callback(JSON.parse($.ajax({
        type: "POST",
        url: '../group/search.php',
        data: $.param(params),
        async: false
    }).responseText));
}

function SearchGroupInterest(interest, callback) {
    var params = {
        interest:interest};

    callback(JSON.parse($.ajax({
        type: "POST",
        url: '../group/search.php',
        data: $.param(params),
        async: false
    }).responseText));
}