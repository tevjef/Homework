$(document).ready(function(){

    var logged_in_ucid;
    var pass;
    var isAdmin;

    getSession(function(response) {
        logged_in_ucid = response.message.ucid;
        pass = response.message.pass;
        isAdmin = response.message.admin;

        $(".logged-in-as").text("Logged in as " + logged_in_ucid);

        if (qs['id'] != null) {
            LoadProfile(qs['id']);
        } else {
            LoadProfile(logged_in_ucid);
        }
    });

    var $form_create_post = $('#form-create-post');
    var to_ucid;
    var from_ucid = logged_in_ucid;
    if (qs['id'] != null) {
        to_ucid = qs['id'];
    } else {
        to_ucid = logged_in_ucid;
    }

    var to = $("<input>").attr({'type':'hidden', 'name':'to_ucid'}).val(to_ucid);
    var from = $("<input>").attr({'type':'hidden', 'name':'from_ucid'}).val(from_ucid);
    $form_create_post.append(to);
    $form_create_post.append(from);
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

            document.title = profile.first_name + " " + profile.last_name + " - " + account.ucid;

            $(".display-image img").attr("src", profile.image);

            // Set full name
            $(".meta-info .name").text(profile.first_name +  " " + profile.last_name);

            // Set about me
            $(".meta-info .about").text(profile.about);

            // Set email
            $(".meta-info .email").text(account.email);

            // Set class
            $(".meta-info .class").text(profile.class_level);

            // Set relationship status
            $(".meta-info .relationship").text(profile.relationship);

            // Set gender
            $(".meta-info .gender").text(profile.gender);

            var $delete_profile = $('#meta-delete');
            var $edit_profile = $('#meta-edit');

            if (account.ucid != logged_in_ucid && !isAdmin) {
                $delete_profile.hide();
                $edit_profile.hide();
            }

            $delete_profile.click(function() {
                var bool = confirm("Are you sure?");
                if (bool == true) {
                    alert("Deleting profile not implemented yet. Uncomment to enable!");
                }
            });

            $edit_profile.click(function() {
                $profile_update.show();
                $profile_update.find('.result').text("");
                $profile_update.dialog("open");
            });

            for (var i in profile.interests) {
                $(".meta-info .interests").append(document.createTextNode(profile.interests[i].name + ", "));
            }

            if (Object.keys(profile.posts).length == 0) {
                $(".posts .utility-box").text("There are no posts here yet. Try making one.")
            }

            for (var j in profile.posts) {
                MakePost(account, profile.posts[j])
            }

            // If the logged in user is viewing their own page
            if (account.ucid == logged_in_ucid) {
                GetGroups(account);
                GetRecommendedPeople(account)
            } else {
                $('.your-groups').parent().hide();
                $('.your-recommended-people').parent().hide();
            }

            GetReviews(account)
        });
    }

    function MakePost(account, postData) {
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

            if (postData.posted_by.ucid != logged_in_ucid) {
                $delete_post.hide();
            }

            if (account.ucid == logged_in_ucid || isAdmin) {
                $delete_post.show();
            }



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
            reviews:true,
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

    function GetGroups(account) {
        var $your_groups = $('.your-groups .listing');

        for (var i in account.profile.groups_own) {
            $your_groups.append(MakeGroupListing(account.profile.groups_own[i]));
        }

        if ((account.profile.groups_own).length == 0) {
            $('.your-groups .title').text('You have no groups, try creating one!');
        }
    }

    function GetRecommendedPeople(account) {
        var $your_groups = $('.your-recommended-people .listing');

        for (var i in account.profile.recommend_people) {
            $your_groups.append(MakePeopleListing(account.profile.recommend_people[i]));
        }
    }

    function GetReviews(account) {
        var $your_reviews = $('.your-reviews .listing');

        for (var i in account.reviews) {
            $your_reviews.append(MakeReviewListing(account.reviews[i]));
        }

        if (account.reviews.length == 0) {
            $('.your-reviews').append('<a href="review.html">Make a review</a>')
        }
    }



    function MakeGroupListing(group) {
        var $listing = $('<div class="group-listing"></div>');
        $listing.append('<a href="group.html?id='+group.id+'">'+group.name+'</a>');

        var string = "Focused on ";
        for (var i in group.interests) {
            string += group.interests[i].name + ", "
        }

        string = string.slice(0, -2);
        if (group.interests.length == 0) {
            string = ""
        }

        $listing.append('<p>'+string+'</p>');
        return $listing
    }

    function MakePeopleListing(person) {
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

    function MakeReviewListing(review) {
        var $listing = $('<div class="review-listing"></div>');

        var $rating = $('<div class="score">'+review.rating+'</div>');

        var $professor = $('<div class="professor"><a href="review.html?professor='+review.professor_id+'">'+review.name+'</a></div>');
        var $class = $('<div class="class"><a href="review.html?class='+review.class_id+'">'+review.class+'</a></div>');

        var $reviewText = $('<p>'+review.review+'</p>');

        $listing.append($rating);
        $listing.append($professor);
        $listing.append($class);
        $listing.append($reviewText);
        $listing.append('<div class="clearfix"></div>');
        return $listing
    }

    function DeletePost(postid, callback) {
        var params = {
            post_id:postid};

        callback(JSON.parse($.ajax({
            type: "POST",
            url: '../profile/post/remove.php',
            data: $.param(params),
            async: false
        }).responseText));
    }

    function DeleteProfile(ucid, callback) {
        var params = {
            ucid:ucid};

        callback(JSON.parse($.ajax({
            type: "POST",
            url: '../login/remove.php',
            data: $.param(params),
            async: false
        }).responseText));
    }

    var $profile_update = $('#meta-update');

    $profile_update.dialog({
        autoOpen: false, modal:true
    });

    $('#close-button').click(function() {
        $profile_update.hide();
    });

    var form_ucid = $("<input>").attr({'type':'hidden', 'name':'ucid'}).val(logged_in_ucid);
    var $form_update_profile = $('#form-update-profile');
    $form_update_profile.append(form_ucid);
    $form_update_profile.submit(function(){
        postMultipartRequest($(this), function(response) {
            if (!response.error) {
                window.location.reload(false);
            } else {
                alert(response.message);
            }
        });
        return false;
    });

    $form_update_profile.find(".interests-select").autocomplete({
        source: "../../interests.php",
        minLength: 2,
        // When option is selected
        select: onSelectInterest($form_update_profile)
    });


    var $form_search_profile_interest = $('#form-search-profile-interest');
    $form_search_profile_interest.append($("<input>").attr({'type':'hidden', 'name':'type'}).val("profile"));
    $form_search_profile_interest.find(".interests-select").autocomplete({
        source: "../interests.php",
        minLength: 2,
        // When option is selected
        select: onSelectSingleInterest($form_search_profile_interest)
    });

});
