<?php
include '../common.php';


$ucid = isset($_POST["ucid"])? $_POST["ucid"]:'';
$group_id = isset($_POST["group_id"])? $_POST["group_id"]:'';

if (empty($ucid) || empty($group_id)) {
    http_response_code(400);
    die(encode_json(['message' => "Bad Request - Must provide the ucid and group_id when retrieving a group", 'error' => true]));
}

if (strcmp($ucid, $group_id) == 0) {
    if (isAdmin($ucid)) {
        $is_owner = true;
    }
}

$result = selectUserOptions($ucid, ['profile' => $get_profile, 'posts' => $get_posts, 'interests' => $get_interests]);
if (is_null($result)) {
    http_response_code(400);
    die(encode_json(['message' => "There was an error selecting profile. Is the UCID registered?", 'error' => true]));
} else {
    http_response_code(200);
    die(encode_json(['account' => $result, 'error' => false]));
}




