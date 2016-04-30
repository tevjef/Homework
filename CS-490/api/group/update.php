<?php

include_once '../common.php';

$group_id = isset($_POST["group_id"])? $_POST["group_id"]:'';
$group_name = isset($_POST["group_name"])? $_POST["group_name"]:'';
$owner_id = isset($_POST["owner_id"])? $_POST["owner_id"]:'';
$interests = isset($_POST["interests"])? $_POST["interests"]:[];

if (empty($group_id)) {
    http_response_code(400);
    die(encode_json(['message' => "Bad Request - Must provide group_id when updating a group.", 'error' => true]));
}

/*if (!(!empty($group_name) && !empty($owner_id))) {
    http_response_code(400);
    die(encode_json(['message' => "Bad Request - Must provide values for at least one field when updating a group.", 'error' => true]));
}*/

$result = updateGroup($group_id, $group_name, $owner_id, $interests);
if (!$result) {
    http_response_code(400);
    die(encode_json(['message' => "There was an error updating group. Is the UCID registered?", 'error' => true]));
} else {
    http_response_code(200);
    die(encode_json(['group' => selectGroup($group_id), 'error' => false]));

}