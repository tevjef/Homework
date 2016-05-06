$(document).ready(function() {
    var logged_in_ucid;
    var pass;
    var isAdmin;

    getSession(function(response) {
        logged_in_ucid = response.message.ucid;
        pass = response.message.pass;
        isAdmin = response.message.admin;

        $(".logged-in-as").text("Logged in as " + logged_in_ucid);

        if (qs['class'] != null) {
            LoadByClass(qs['class']);
        } else if (qs['professor'] != null) {
            LoadByProfessor(qs['professor']);
        } else {
            LoadNormal()
        }
    });

    function LoadByClass(classId) {
        console.log("Loading class "+ classId);
        $('.create-review').parent().hide();
        GetClassReviews(classId, function(response) {
            console.log(response);
            $('.meta-info .name').text(response.class.name);
            $('.meta-info .average').text(response.class.average);
            var reviews = response.class.reviews;
            if (reviews.length == 0) {
                $('.reviews').text("This class have no reviews, try making one")
            } else {
                for (var i in reviews) {
                    MakeClassReview(false, reviews[i]);
                }
            }

        })

    }

    function LoadByProfessor(professorId) {
        console.log("Loading professor "+ professorId);
        $('.create-review').parent().hide();
        GetProfessorReviews(professorId, function(response) {
            console.log(response);
            $('.meta-info .name').text(response.professor.name);
            $('.meta-info .average').text(response.professor.average);
            var reviews = response.professor.reviews;
            if (reviews.length == 0) {
                $('.reviews').text("This professor have no reviews, try making one.")
            } else {
                for (var i in reviews) {
                    MakeProfessorReview(false, reviews[i]);
                }
            }

        })
    }


    function LoadNormal() {
        $('.meta-info').parent().hide();
        console.log("Loading user review "+ logged_in_ucid);
        GetUserReviews(logged_in_ucid, function(response) {
            console.log(response.reviews);
            var reviews = response.reviews.reviews;
            if (reviews.length == 0) {
                $('.reviews').text("You have no reviews, try making one")
            } else {
                $('.reviews').append('<h3>Your Reviews</h3><br>');
                for (var i in reviews) {
                    MakeNormalReview(true, reviews[i]);
                }
            }
        })
    }

    function MakeClassReview(creator, review) {
        console.log("Making review from " + review)
        var id = review.id;
        var professorId = review.professor_id;
        var professorName = review.professor_name;
        var reviewClass = review.class;
        var classId = review.class_id;
        var rating = review.rating;
        var review = review.review;

        var reviewId = 'review-' + id;
        var reviewDiv = '<div id="' + reviewId + '"></div>';

        var $review = $(reviewDiv).load("elements/review.html", function (content, status, xhr) {
            $("#" + reviewId + " .score").text(rating);
            $("#" + reviewId + " .heading a").attr("href", "review.html?professor=" + professorId).text(professorName);
            $("#" + reviewId + " .subheading a").attr("href", "review.html?class=" + classId).text("");

            $("#" + reviewId + " .review-content p").text(review);

            // Delete review
            var $delete_review = $("#" + reviewId + " .delete");
            $delete_review.click(function () {
                var bool = confirm("Are you sure");
                if (bool == true) {
                    DeleteReview(id, function (response) {
                        if (!response.error) {
                            $review.hide();
                        } else {
                            alert(response.message);
                        }
                    })
                }
            });

            $delete_review.hide();

            if (creator || isAdmin) {
                $delete_review.show();
            }
        });
        $(".reviews").append($review);
    }

    function MakeProfessorReview(creator, review) {
        var id = review.id;
        var professorId = review.professor_id;
        var professorName = review.professor_name;
        var reviewClass = review.class;
        var classId = review.class_id;
        var rating = review.rating;
        var review = review.review;

        var reviewId = 'review-' + id;
        var reviewDiv = '<div id="' + reviewId + '"></div>';

        var $review = $(reviewDiv).load("elements/review.html", function (content, status, xhr) {
            $("#" + reviewId + " .score").text(rating);
            $("#" + reviewId + " .subheading a").attr("href", "review.html?professor=" + professorId).text("");
            $("#" + reviewId + " .heading a").attr("href", "review.html?class=" + classId).text(reviewClass);

            $("#" + reviewId + " .review-content p").text(review);

            // Delete review
            var $delete_review = $("#" + reviewId + " .delete");
            $delete_review.click(function () {
                var bool = confirm("Are you sure");
                if (bool == true) {
                    DeleteReview(id, function (response) {
                        if (!response.error) {
                            $review.hide();
                        } else {
                            alert(response.message);
                        }
                    })
                }
            });

            $delete_review.hide();

            if (creator || isAdmin) {
                $delete_review.show();
            }
        });
        $(".reviews").append($review);
    }

    function MakeNormalReview(creator, review) {
        console.log("Making review from " + review);
        var id = review.id;
        var professorId = review.professor_id;
        var professorName = review.professor_name;
        var reviewClass = review.class;
        var classId = review.class_id;
        var rating = review.rating;
        var review = review.review;

        var reviewId = 'review-' + id;
        var reviewDiv = '<div id="' + reviewId + '"></div>';

        var $review = $(reviewDiv).load("elements/review.html", function (content, status, xhr) {
            $("#" + reviewId + " .score").text(rating);
            $("#" + reviewId + " .heading a").attr("href", "review.html?professor=" + professorId).text(professorName);
            $("#" + reviewId + " .subheading a").attr("href", "review.html?class=" + classId).text(reviewClass);

            $("#" + reviewId + " .review-content p").text(review);

            // Delete review
            var $delete_review = $("#" + reviewId + " .delete");
            $delete_review.click(function () {
                var bool = confirm("Are you sure");
                if (bool == true) {
                    DeleteReview(id, function (response) {
                        if (!response.error) {
                            $review.hide();
                        } else {
                            alert(response.message);
                        }
                    })
                }
            });

            $delete_review.hide();

            if (creator || isAdmin) {
                $delete_review.show();
            }
        });
        $(".reviews").append($review);
    }

    var $form_create_review = $('#form-create-review');
    var $from = $("<input>").attr({'type':'hidden', 'name':'ucid'}).val(logged_in_ucid);
    $form_create_review.append($from);
    $form_create_review.submit(function() {
        var $this = $(this);
        postRequest($(this), function(response) {
            if (!response.error) {
                window.location.href = 'review.html'
            } else {
                $('.result').text(response.message);
            }
        });
        return false;
    });


    $form_create_review.find(".class-select").autocomplete({
        source: "../classes.php",
        minLength: 2,
        // When option is selected
        select: onSelectClassId($form_create_review)
    });

    $form_create_review.find(".professor-select").autocomplete({
        source: "../professors.php",
        minLength: 2,
        // When option is selected
        select: onSelectProfessorId($form_create_review)
    });




    var $form_search_class = $('#form-search-class');
    $form_search_class.find(".class-select").autocomplete({
        source: "../classes.php",
        minLength: 2,
        // When option is selected
        select: onSelectClass($form_search_class)
    });

    var $form_search_professor = $('#form-search-professor');
    $form_search_professor.find(".professor-select").autocomplete({
        source: "../professors.php",
        minLength: 2,
        // When option is selected
        select: onSelectProfessor($form_search_professor)
    });

});



function DeleteReview(reviewid, callback) {
    var params = {
        review_id:reviewid};

    callback(JSON.parse($.ajax({
        type: "POST",
        url: '../review/remove.php',
        data: $.param(params),
        async: false
    }).responseText));
}


function GetUserReviews(ucid, callback) {
    var params = {
        ucid:ucid};

    callback(JSON.parse($.ajax({
        type: "POST",
        url: '../review/index.php',
        data: $.param(params),
        async: false
    }).responseText));
}


function GetClassReviews(id, callback) {
    var params = {
        class_id:id};

    callback(JSON.parse($.ajax({
        type: "POST",
        url: '../review/index.php',
        data: $.param(params),
        async: false
    }).responseText));
}

function GetProfessorReviews(id, callback) {
    var params = {
        professor_id:id};

    callback(JSON.parse($.ajax({
        type: "POST",
        url: '../review/index.php',
        data: $.param(params),
        async: false
    }).responseText));
}


function CreateReview(ucid, classId, professorId, rating, text, callback) {
    var params = {
        ucid:ucid,
        class_id:classId,
        professor_id:professorId,
        rating:rating,
        text:text
    };

    callback(JSON.parse($.ajax({
        type: "POST",
        url: '../review/index.php',
        data: $.param(params),
        async: false
    }).responseText));
}
