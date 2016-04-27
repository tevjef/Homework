$(document).ready(function(){

    var ucid;
    var pass;

    getSession(function(response) {
        ucid = response.message.ucid;
        pass = response.message.pass;

        $(".logged-in-as").text("Logged in as " + ucid);

        if (qs['id'] != null) {
            LoadProfile(qs['id']);
        } else {
            LoadProfile(ucid);
        }
    });

    var $form_create_post = $('#form-create-post');
    $form_create_post.submit(function(){
        postRequest($(this), function(response) {
            if (!response.error) {
                window.location.reload(false);
            } else {
                alert(response.message);
            }
        });
        return false;
    });

    var to_ucid;
    var from_ucid = ucid;
    if (qs['id'] != null) {
        to_ucid = qs['id'];
    } else {
        to_ucid = ucid;
    }

    var to = $("<input>").attr({'type':'hidden', 'name':'to_ucid'}).val(to_ucid);
    var from = $("<input>").attr({'type':'hidden', 'name':'from_ucid'}).val(from_ucid);
    $form_create_post.append(to);
    $form_create_post.append(from);

    function LoadProfile(ucid) {
        console.log("Load ucid " + ucid);
        GetProfile(ucid, function(response) {
            console.log(response);

            if (response.account == undefined) {
                window.location.href = "404.html";
            }

            if (response.account.profile == null && qs['id'] == null) {
                console.log("Profile not created yet");
                    window.location.href = "create-profile.html";
            }

            var account = response.account;
            var profile = account.profile;
            // Set display image
            if (profile.image == null) {
                profile.image = "http://i.imgur.com/cIiHMjg.png";
            }
            $(".display-image img").attr("src", profile.image);

            // Set full name
            $(".profile-info .name").text(profile.first_name +  " " + profile.last_name);

            // Set about me
            $(".profile-info .about").text(profile.about);

            // Set class
            $(".profile-info .class").text(profile.class_level);

            // Set relationship status
            $(".profile-info .relationship").text(profile.relationship);

            // Set gender
            $(".profile-info .gender").text(profile.gender);

            for (var i in profile.interests) {
                $(".profile-info .interests").append(document.createTextNode(profile.interests[i].name + ", "));
            }

            if (Object.keys(profile.posts).length == 0) {
                $(".posts .utility-box").text("There are no posts here yet. Try making one.")
            }

            for (var j in profile.posts) {
                MakePost(profile.posts[j])
            }

        });
    }

    function MakePost(postData) {
        var postId ='post-' + postData.id;
        var postDiv = '<div id="' + postId + '"></div>';
        var $post = $(postDiv).load("elements/post.html", function (content, status, xhr) {
            $("#" + postId + " .post-header img").attr("src", postData.posted_by.image);
            $("#" + postId + " .profile-link").attr("href", "profile.html?id="+postData.posted_by.ucid)
                .text(postData.posted_by.first_name + " " + postData.posted_by.first_name);
            $("#" + postId + " .date").text(postData.timeStamp);

            $("#" + postId + " .post-body p").text(postData.postText);

        });
        $(".posts .utility-box").append($post);

        // Does not work

        // console.log(JSON.stringify(postDiv));
    }

    function GetProfile(ucid, callback) {
        var params = {
            ucid:ucid,
            signed_in_ucid:ucid,
            profile:true,
            interests:true,
            recommend_people:true,
            recommend_groups:true,
            groups_in:true,
            groups_own:true,
            posts:true};

        callback(JSON.parse($.ajax({
            type: "POST",
            url: '../profile/index.php',
            data: $.param(params),
            async: false
        }).responseText));
    }

    var $form_create_profile = $('#form-create-profile');
    $form_create_profile.submit(function(){
        postMultipartRequest($(this), function(response) {
            if (!response.error) {
                window.location.href = 'profile.html'
            } else {
                alert(response.message);
            }
        });
        return false;
    });

    var $form_create_account = $('#form-create-account');
    $form_create_account.submit(function(){
        postRequest($(this), function(response) {
            if (!response.error) {
                window.location.href = 'create-profile.html'
            } else {
                alert(response.message);
            }
        });
        return false;
    });


});
