<?php

include '../common.php';


$ucid = isset($_POST["ucid"])? $_POST["ucid"]:'';
$privileged_user = isset($_POST["signed_in_ucid"])? $_POST["signed_in_ucid"]:'';

/*if (empty($ucid) || empty($privileged_user)) {
    http_response_code(400);
    die(encode_json(['message' => "Bad Request - Must provide the ucid and signed_in_ucid when retrieving and account", 'error' => true]));
}*/

$is_owner = isAdmin($ucid);

if (strcmp($ucid, $privileged_user) == 0) {
    //if (isAdmin($ucid));
    $is_owner = true;
}

$result = selectUser($ucid);
if (is_null($result)) {
    http_response_code(400);
    die(encode_json(['message' => "There was an error selecting profile. Is the UCID registered?", 'error' => true]));
} else {
    http_response_code(200);
    die(encode_json(['message' => $result, 'error' => false]));
}




