<?php

include '../common.php';

$ucid = isset($_POST["ucid"])? $_POST["ucid"]:'';
$password = isset($_POST["pass"])? $_POST["pass"]:'';

if (empty($ucid) || empty($password)) {
    http_response_code(400);
    echo encode_json(['message' => 'Bad Request - You must provide the \'ucid\' and \'pass\' as part of the parameters for the POST request', 'error' => true]);
    exit(-1);
}

if (checkPassword($ucid, $password)) {
    http_response_code(200);
    echo encode_json(['message' => 'Your credentials are correct.', 'error' => false, 'account' => selectUser($ucid)]);
}else {
    http_response_code(200);
    echo encode_json(['message' => 'Your credentials are incorrect.', 'error' => true]);
}
