<?php

define('URL', 'http://localhost/site/');

function login($username, $password) {
    $fields = "ucid=$username&pass=$password";
    $result = json_decode(postRequest("https://web.njit.edu/~tj76/api/login/login.php", [], $fields), true);
    return $result;
}

function getProfile($ucid, $signed_in_ucid) {
    $fields = "ucid=$ucid&signed_in_ucid=$signed_in_ucid&profile=true";
    $result = postRequest('https://web.njit.edu/~tj76/api/profile/index.php', [], $fields);
    return json_decode($result, true);
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
    $err = curl_error($ch);
    curl_close($ch);
    if ($err) {
        return "cURL Error #:" . $err;
    } else {
        return $data;
    }
}
