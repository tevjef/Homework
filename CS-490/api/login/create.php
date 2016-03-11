<?php

include 'common.php';

$ucid = isset($_POST["ucid"])? $_POST["ucid"]:'';
$ucid_pass = isset($_POST["ucid_pass"])? $_POST["ucid_pass"]:'';
$user_pass = isset($_POST["user_pass"])? $_POST["user_pass"]:'';

if (empty($ucid) || empty($ucid_pass) || empty($user_pass)) {
    http_response_code(400);
    die("Bad Request - Must provide the ucid, ucid_pass and user_pass when creating an account");
}

$response = loginNjit($ucid, $ucid_pass);
$result = json_decode(checkAndSave($ucid, $user_pass), true);
$dbMessage = $result['message'];

if (strpos($response, 'loginok.html') != false) {
    http_response_code(201);
    die("Created");
}else {
    http_response_code(401);
    die("Unauthorized - NJIT password is incorrect");
}

function checkAndSave($user, $pass){
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $fields = "user={$user}&pass={$pass}";
    return postRequest('https://web.njit.edu/~maz9/DB/', [], $fields);
}

function loginNjit($user, $pass) {
    $headers = array(
        'Origin' => 'https://www.njit.edu',
        'Accept-Encoding' => 'gzip, deflate',
        'Accept-Language' => 'en-US,en;q=0.8',
        'Upgrade-Insecure-Requests' => '1',
        'User-Agent' => 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36',
        'Content-Type' => 'application/x-www-form-urlencoded',
        'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
        'Cache-Control' => 'max-age=0',
        'Referer' => 'https://www.njit.edu/cp/login.php',
        'Connection' => 'keep-alive',
        'DNT' => '1',
    );
    $fields = "user={$user}&pass={$pass}&uuid=0xACA021";
    return postRequest('https://cp4.njit.edu/cp/home/login', $headers, $fields);
}