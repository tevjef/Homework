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
            CreateGroup(logged_in_ucid);
        }

        GetProfileGroups(logged_in_ucid, function(response) {
            console.log(response);
            GetGroups(response.account);
            GetRecommendedGroups(response.account)

        })
    });

    function CreateGroup() {
        console.log("Create group");

        $('.make-post').parent().hide();
        $('.meta-info').parent().hide();

        var $createGroup = $('<div></div>').load("elements/group-create.html", function (content, status, xhr) {

            var $form = $('#form-create-group');
            var $owner = $("<input>").attr({'type':'hidden', 'name':'ucid'}).val(logged_in_ucid);
            $form.append($owner);
            $form.submit(function() {

                postRequest($form, function(response) {
                    if (!response.error) {
                        var group_id = response.account.profile.groups_own[0].id;
                        window.location.href = 'group.html?id=' + group_id;
                    } else {
                        $('.result').text(response.message);
                    }
                })
            });
            $form.find(".interests-select").autocomplete({
                source: "../../interests.php",
                minLength: 2,
                // When option is selected
                select: onSelectInterest($form)
            });

        });

        $('.content-middle .utility-box').append($createGroup);

        function checkInput($input) {
            if ($input.val() == '' || $input.val() == null || $input.val() == undefined) {
                $('.result').text('Must provide all fields');
                validation_failed = true;
            }
        }

    }

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

            var $delete_group = $('#meta-delete');
            var $edit_group = $('#meta-edit');

            if (group.ownerUcid != logged_in_ucid && !isAdmin) {
                $delete_group.hide();
                $edit_group.hide();
            }

            $delete_group.click(function() {
                var bool = confirm("Are you sure?");
                if (bool == true) {
                    alert("Deleting group not implemented");
                }
            });

            $edit_group.click(function() {
                $group_update.show();
                $group_update.find('.result').text("");
                $group_update.dialog("open");
            });


            for (var j in group.posts) {
                console.log(group.posts[j]);
                MakePost(group.posts[j])
            }

            if (group.posts == 0) {
                $('.posts .utility-box').text("There are no posts here, try making one!");
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

    function GetGroups(account) {
        var $your_groups = $('.your-groups .listing');

        for (var i in account.profile.groups_own) {
            $your_groups.append(MakeGroupListing(account.profile.groups_own[i]));
        }

        if ((account.profile.groups_own).length == 0) {
            $('.your-groups .title').text('You have no groups, try creating one!');
        }
    }

    function GetRecommendedGroups(account) {
        var $your_recommended_groups = $('.your-recommend-groups .listing');

        for (var i in account.profile.recommend_groups) {
            $your_recommended_groups.append(MakeGroupListing(account.profile.recommend_groups[i]));
        }

        if ((account.profile.recommend_groups).length == 0) {
            $('.your-recommend-groups .title').text('You have no recommended groups. Try adding some hobbies.');
        }
    }


    function MakeGroupListing(group) {
        var $listing = $('<div class="group-listing"></div>');
        $listing.append('<a href="group.html?id='+group.id+'">'+group.name+'</a>');

        var string = "";
        if (group.reason != undefined) {
            string = "Because you like " + group.reason;
        } else {
            string = "Focused on ";
            for (var i in group.interests) {
                string += group.interests[i].name + ", "
            }

            string = string.slice(0, -2);
        }
        $listing.append('<p>'+string+'</p>');
        return $listing
    }

    var $group_update = $('#meta-update');

    $group_update.dialog({
        autoOpen: false, modal:true
    });

    $group_update.dialog('option', 'position', 'center');

    $('#close-button').click(function() {
        $group_update.hide();
    });

    var $form_group_update = $('#form-update-group');
    var $group_id = $("<input>").attr({'type':'hidden', 'name':'group_id'}).val(qs['id']);
    $form_group_update.append($group_id);
    $form_group_update.submit(function () {
        postRequest($form_group_update, function(response) {
            if (!response.error) {
                window.location.reload(false);
            } else {
                $('.result').text(response.message);
            }
        });
        return false;
    });


    var $form_search_group_interest = $('#form-search-group-interest');
    $form_search_group_interest.append($("<input>").attr({'type':'hidden', 'name':'type'}).val("group_interest"));
    $form_search_group_interest.find(".interests-select").autocomplete({
        source: "../interests.php",
        minLength: 2,
        // When option is selected
        select: onSelectSingleInterest($form_search_group_interest)
    });


});

function GetProfileGroups(ucid, callback) {
    var params = {
        ucid:ucid,
        signed_in_ucid:ucid,
        recommend_groups:true,
        groups_in:true,
        groups_own:true};

    callback(JSON.parse($.ajax({
        type: "POST",
        url: '../profile/index.php',
        data: $.param(params),
        async: false
    }).responseText));
}

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