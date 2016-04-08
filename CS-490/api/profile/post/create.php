<?php

include '../../common.php';

$to_ucid = isset($_POST["to_ucid"])? $_POST["to_ucid"]:'';
$from_ucid = isset($_POST["from_ucid"])? $_POST["from_ucid"]:'';
$postText = isset($_POST["text"])? $_POST["text"]:'';

if (empty($to_ucid) || empty($from_ucid) || empty($postText)) {
    http_response_code(400);
    die(encode_json(['message' => "Bad Request - Must provide the to_ucid, from_ucid, postText from when creating a post.", 'error' => true]));
}

$success = createPost($to_ucid, $from_ucid, $postText);

$user = selectUserOptions($to_ucid, ['profile' => true, 'posts' => true]);
if (is_null($success)) {
    http_response_code(400);
    die(encode_json(['message' => "There was an error creation the post. Does the profile exist?", 'error' => true]));
} else {
    http_response_code(200);
    die(encode_json(['message' => $user, 'error' => false]));
}
