<?php
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
    echo json_encode(['login' => true, 'message' => 'Your credentials are correct.' . $dbMessage]);
}else {
    echo json_encode(['login' => false, 'message' => 'Your credentials are incorrect.' . $dbMessage]);
}

function postRequest($url, $headers, $fields) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
function checkDatabase($user, $pass){
   /* $pass = password_hash($pass, PASSWORD_DEFAULT);*/
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