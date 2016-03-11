<?php

include 'common.php';

$username = isset($_POST["user"])? $_POST["user"]:'';
$password = isset($_POST["pass"])? $_POST["pass"]:'';

if (empty($username) || empty($password)) {
    echo json_encode(array('message' => 'You must provide the \'user\' and \'pass\' and part of the parameters for the POST request'));
    exit(-1);
}

$response = loginNjit($username, $password);
$result = json_decode(checkDatabase($username, $password), true);
$dbMessage = $result['message'];

if (strpos($response, 'loginok.html') != false) {
    http_response_code(200);
    echo json_encode(['login' => true, 'message' => 'Your credentials are correct.' . $dbMessage]);
}else {
    echo json_encode(['login' => false, 'message' => 'Your credentials are incorrect.' . $dbMessage]);
}

function checkDatabase($user, $pass){
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