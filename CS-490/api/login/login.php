<?php

include '../common.php';

$ucid = isset($_POST["ucid"])? $_POST["ucid"]:'';
$password = isset($_POST["pass"])? $_POST["pass"]:'';

if (empty($ucid) || empty($password)) {
    http_response_code(400);
    echo json_encode(['message' => 'Bad Request - You must provide the \'ucid\' and \'pass\' and part of the parameters for the POST request'], JSON_PRETTY_PRINT);
    exit(-1);
}

if (checkPassword($ucid, $password)) {
    http_response_code(200);
    echo json_encode(['message' => 'Your credentials are correct.', 'error' => false, 'account' => selectUser($ucid)], JSON_PRETTY_PRINT);
}else {
    http_response_code(200);
    echo json_encode(['message' => 'Your credentials are incorrect.', 'error' => true], JSON_PRETTY_PRINT);
}
