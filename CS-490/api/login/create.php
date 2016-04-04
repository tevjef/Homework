<?php

include '../common.php';

$ucid = isset($_POST["ucid"])? $_POST["ucid"]:'';
$ucid_pass = isset($_POST["ucid_pass"])? $_POST["ucid_pass"]:'';
$user_pass = isset($_POST["user_pass"])? $_POST["user_pass"]:'';
$user_name = isset($_POST["user_name"])? $_POST["user_name"]:'';
$email = isset($_POST["email"])? $_POST["email"]:'';

if (empty($ucid) || empty($ucid_pass) || empty($user_pass) || empty($user_name) || empty($email)) {
    http_response_code(400);
    die(encode_json(['message' => "Bad Request - Must provide the ucid, ucid_pass, user_pass, user_name, email when creating an account", 'error' => true]));
}

$response = loginNjit($ucid, $ucid_pass);

if (strpos($response, 'loginok.html') != false) {
    $result = createUser($user_name, $user_pass, $email, $ucid);
    if (is_null($result)) {
        http_response_code(400);
        die(encode_json(['message' => "The ucid already exists. Please login.", 'error' => true]));
    } else {
        http_response_code(201);
        die(encode_json(['message' => "Account created",
            'account' => $result,'error' => false]));
    }
} else {
    http_response_code(401);
    die(encode_json(['message' => "Unauthorized - NJIT password is incorrect",'error' => true]));
}

