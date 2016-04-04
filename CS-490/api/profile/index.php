<?php

$ucid = isset($_POST["ucid"])? $_POST["ucid"]:'';
$privilege = isset($_POST["signed_in_ucid"])? $_POST["signed_in_ucid"]:'';

if (empty($ucid) || empty($privilege)) {
    http_response_code(400);
    die(json_encode(['message' => "Bad Request - Must provide the ucid and signed_in_ucid when retrieving and account", 'error' => true]));
}

$response = get_from_db();

$profile = json_decode($response, true);

switch($privilege) {
    case 0:
    case 2:
        $posts = get_from_db();
        array_push($profile, $posts);
        array_push($profile, $groups_in);
        array_push($profile, $groups_own);
        break;
    case 1:
        break;
}

http_response_code(200);
echo json_encode($profile);


