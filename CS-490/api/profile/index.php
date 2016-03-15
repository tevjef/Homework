<?php

$ucid = isset($_POST["ucid"])? $_POST["ucid"]:'';
$privilege = isset($_POST["privilege"])? $_POST["privilege"]:'';

if (empty($ucid) || empty($privilege)) {
    http_response_code(400);
    die("Bad Request - Must provide the ucid and privileges when retrieving and account");
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


