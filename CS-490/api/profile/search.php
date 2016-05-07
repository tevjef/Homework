<?php
include '../common.php';

$ucid = isset($_POST["ucid"])? $_POST["ucid"]:'';
$name = isset($_POST["name"])? $_POST["name"]:'';
$interest = isset($_POST["interest"])? $_POST["interest"]:'';

$result = "";

if (!empty($interest)) {
    $result = searchUsersByInterest($interest);
} else {
    $result = searchUsersByName($name);
}

if (is_null($result)) {
    http_response_code(400);
    die(encode_json(['message' => "There was an error selecting profile. Is the UCID registered?", 'error' => true]));
} else {
    http_response_code(200);
    die(encode_json(['profiles' => $result, 'error' => false]));
}




