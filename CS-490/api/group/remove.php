<?php

require '../common.php';

$group_id = isset($_POST["group_id"])? $_POST["group_id"]:'';

if (empty($group_id)) {
    http_response_code(400);
    die(encode_json(['message' => 'Bad Request - You must provide the group_id as part of the parameters for the POST request', 'error' => true]));
}

if (deleteGroup($group_id)) {
    http_response_code(200);
    die(encode_json(['message' => "Group deleted", 'error' => false]));
} else {
    http_response_code(400);
    die(encode_json(['message' => "There was an error deleting group", 'error' => true]));
}