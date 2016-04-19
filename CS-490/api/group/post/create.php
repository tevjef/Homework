<?php

include '../../common.php';

$group_id = isset($_POST["group_id"])? $_POST["group_id"]:'';
$from_ucid = isset($_POST["from_ucid"])? $_POST["from_ucid"]:'';
$postText = isset($_POST["text"])? $_POST["text"]:'';

if (empty($group_id) || empty($from_ucid) || empty($postText)) {
    http_response_code(400);
    die(encode_json(['message' => "Bad Request - Must provide the group_id, from_ucid, text from when creating a post on a group.", 'error' => true]));
}

$success = createGroupPost($group_id, $from_ucid, $postText);

$user = selectUserOptions($from_ucid, ['posts' => true]);
if (is_null($success)) {
    http_response_code(400);
    die(encode_json(['message' => "There was an error creation the post. Does the profile and group exist?", 'error' => true]));
} else {
    http_response_code(200);
    die(encode_json(['message' => $user, 'error' => false]));
}
