$(document).ready(function() {
    var logged_in_ucid;
    var pass;
    var isAdmin;

    getSession(function(response) {
        logged_in_ucid = response.message.ucid;
        pass = response.message.pass;
        isAdmin = response.message.admin;

        $(".logged-in-as").text("Logged in as " + logged_in_ucid);

        if (qs['id'] != null) {
            LoadGroup(qs['id']);
        } else {
            SetupEmpty(logged_in_ucid);
        }
    });



    function LoadGroup(id) {
        console.log("Load group " + id);

        var $form_create_post = $('#form-create-post');
        var from = $("<input>").attr({'type':'hidden', 'name':'from_ucid'}).val(logged_in_ucid);
        var group_id = $("<input>").attr({'type':'hidden', 'name':'group_id'}).val(id);
        $form_create_post.append(from);
        $form_create_post.append(group_id);
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

        GetGroup(id, function(response) {
            console.log(response);
            if (response.error) {
                window.location.href = "404.html";
            }
            var group = response.group

            $('.meta-info .name').text(group.name);

            $('.meta-info .owner-name').append('<a href="profile.html?id='+group.ownerUcid+'">'+group.ownerUcid+'</a>');

            for (var i in group.interests) {
                $(".meta-info .interests").append(document.createTextNode(group.interests[i].name + ", "));
            }

            for (var j in group.posts) {
                console.log(group.posts[j]);
                MakePost(group.posts[j])
            }
        });
    }

    function MakePost(postData) {
        var postId ='post-' + postData.id;
        var postDiv = '<div id="' + postId + '"></div>';
        var $post = $(postDiv).load("elements/post.html", function (content, status, xhr) {
            $("#" + postId + " .post-header img").attr("src", postData.posted_by.image);
            $("#" + postId + " .profile-link").attr("href", "profile.html?id="+postData.posted_by.ucid)
                .text(postData.posted_by.first_name + " " + postData.posted_by.last_name);
            $("#" + postId + " .date").text(postData.timeStamp);

            $("#" + postId + " .post-body p").text(postData.postText);

            // Delete post
            var $delete_post = $("#" + postId + " .post-delete");
            $delete_post.click(function(){
                var bool = confirm("Are you sure");
                if (bool == true) {
                    DeletePost(postData.id, function(response) {
                        window.location.reload(false);
                    })
                }
            });

           /* if (postData.posted_by.ucid != logged_in_ucid) {
                $delete_post.hide();
            }

            if (account.ucid == logged_in_ucid || isAdmin) {
                $delete_post.show();
            }*/



        });
        $(".posts .utility-box").append($post);

        // Does not work

        // console.log(JSON.stringify(postDiv));
    }
});


function GetGroup(id, callback) {
    var params = {
        group_id:id};

    callback(JSON.parse($.ajax({
        type: "POST",
        url: '../group/index.php',
        data: $.param(params),
        async: false
    }).responseText));
}