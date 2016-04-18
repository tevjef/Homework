<?php

include '../common.php';

//var_dump($_POST);
$ucid = isset($_POST["ucid"])? $_POST["ucid"]:'';
$group_name = isset($_POST["group_name"])? $_POST["group_name"]:'';


if (empty($ucid) || empty($group_name)) {
    http_response_code(400);
    die(encode_json(['message' => "Bad Request - Must provide ucid, group_name fields when creating a group.", 'error' => true]));
}

$result = createGroup($ucid, $group_name);
if (is_null($result)) {
    http_response_code(400);
    die(encode_json(['message' => "There was an error creation profile. Is the UCID registered? Does the profile already exist?", 'error' => true]));
} else {
    http_response_code(200);
    die(encode_json(['message' => "The group was created", 'account' => $result, 'error' => false]));
}