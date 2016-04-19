<?php

require '../common.php';

$ucid = isset($_POST["ucid"])? $_POST["ucid"]:'';

if (empty($ucid)) {
    http_response_code(400);
    die(encode_json(['message' => 'Bad Request - You must provide the \'ucid\' and \'pass\' as part of the parameters for the POST request', 'error' => true]));
}

if (deleteUser($ucid)) {
    http_response_code(200);
    die(encode_json(['message' => "User deleted", 'error' => false]));
} else {
    http_response_code(400);
    die(encode_json(['message' => "There was an error deleting user", 'error' => true]));
}