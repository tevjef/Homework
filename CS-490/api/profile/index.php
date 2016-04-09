<?php

include '../common.php';


$ucid = isset($_POST["ucid"])? $_POST["ucid"]:'';
$privileged_user = isset($_POST["signed_in_ucid"])? $_POST["signed_in_ucid"]:'';
$get_profile = isset($_POST["profile"])? true:false;
$get_posts = isset($_POST["posts"])? true:false;
$get_groups_in = isset($_POST["groups_in"])? true:false;
$get_groups_own = isset($_POST["groups_own"])? true:false;
$get_recommended_people = isset($_POST["recommend_people"])? true:false;
$get_recommended_groups = isset($_POST["recommend_groups"])? true:false;

if (empty($ucid) || empty($privileged_user)) {
    http_response_code(400);
    die(encode_json(['message' => "Bad Request - Must provide the ucid and signed_in_ucid when retrieving and account", 'error' => true]));
}

if (strcmp($ucid, $privileged_user) == 0) {
    if (isAdmin($ucid)) {
        $is_owner = true;
    }
}

$result = selectUserOptions($ucid, ['profile' => $get_profile, 'posts' => $get_posts]);
if (is_null($result)) {
    http_response_code(400);
    die(encode_json(['message' => "There was an error selecting profile. Is the UCID registered?", 'error' => true]));
} else {
    http_response_code(200);
    die(encode_json(['account' => $result, 'error' => false]));
}




