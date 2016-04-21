<?php
include '../common.php';

$group_id = isset($_POST["group_id"])? $_POST["group_id"]:'';

if (empty($group_id)) {
    http_response_code(400);
    die(encode_json(['message' => "Bad Request - Must provide the ucid and group_id when retrieving a group", 'error' => true]));
}


$result = selectGroup($group_id, ['posts' => true, 'interests' => true]);
if (is_null($result)) {
    http_response_code(400);
    die(encode_json(['message' => "There was an error selecting profile. Is the UCID registered?", 'error' => true]));
} else {
    http_response_code(200);
    die(encode_json(['group' => $result, 'error' => false]));
}




