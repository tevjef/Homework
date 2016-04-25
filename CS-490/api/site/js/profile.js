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
    function LoadProfile(ucid) {
        console.log("Load ucid " + ucid);
        GetProfile(ucid, function(response) {
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
                console.log(profile.interests[i]);
                $(".profile-info .interests").append(document.createTextNode(profile.interests[i].name + ", "));
            }

            for (var i in profile.posts) {
                console.log(profile.posts[i]);
               MakePost(profile.posts[i])
            }

        });
    }

    function MakePost(postData) {
        var $post = $("<div></div>").load("elements/post.html");

        console.log(JSON.stringify($post));
        console.log(JSON.stringify($post.find(".post-header img")));
        console.log(JSON.stringify($post.find(".profile-link")));

        $($post).find(".post-header img").attr("src", postData.posted_by.image);
        $($post).find(".profile-link").attr("href", "profile.html?id="+postData.posted_by.ucid)
            .text(postData.posted_by.first_name + " " + postData.posted_by.first_name);
        $($post).find(".date").text(postData.timeStamp);

        $($post).find(".post-body").text(postData.postText);

        $(".posts .utility-box").append($post);

        return $post

    }

    function GetProfile(ucid, callback) {
        var params = {ucid:ucid,signed_in_ucid:ucid,profile:true,interests:true,recommend_people:true,groups_in:true,posts:true}

        callback(JSON.parse($.ajax({
            type: "POST",
            url: '../profile/index.php',
            data: $.param(params),
            async: false
        }).responseText));

       /* $.post('../profile/index.php', 'ucid='+ucid+'&signed_in_ucid='+ucid+'&profile=true', function(response, status, xhr){
                callback(JSON.parse(xhr.responseText));
            },'text')
            .fail(function(xhr, textStatus, errorThrown) {
                callback(JSON.parse(xhr.responseText));
            });*/
    }
});
