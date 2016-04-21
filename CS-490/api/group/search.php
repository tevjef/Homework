<?php
include '../common.php';

$keyword = isset($_POST["keyword"])? $_POST["keyword"]:'';
$interest = isset($_POST["interest"])? $_POST["interest"]:'';

$result = "";

if (!empty($interest)) {
    $result = searchGroupsByInterest($interest);
} else {
    $result = searchGroupsByName($keyword);
}
if (is_null($result)) {
    http_response_code(400);
    die(encode_json(['message' => "There was an error selecting profile. Is the UCID registered?", 'error' => true]));
} else {
    http_response_code(200);
    die(encode_json(['groups' => $result, 'error' => false]));
}




