<?php

include_once '../common.php';

$ucid = isset($_POST["ucid"])? $_POST["ucid"]:'';
$first_name = isset($_POST["first_name"])? $_POST["first_name"]:'';
$last_name = isset($_POST["last_name"])? $_POST["last_name"]:'';
$class_level = isset($_POST["class_level"])? $_POST["class_level"]:'';
$about = isset($_POST["about"])? $_POST["about"]:'';
$relationship = isset($_POST["relationship"])? $_POST["relationship"]:'';
$gender = isset($_POST["gender"])? $_POST["gender"]:'';
$image = getUploaded();

if (empty($ucid) || empty($first_name) || empty($last_name)) {
    http_response_code(400);
    die(encode_json(['message' => "Bad Request - Must provide ucid, first_name and last_name when updating a profile.", 'error' => true]));
}


$result = updateProfile($ucid, $first_name, $last_name, $relationship, $class_level, $gender, $about, $image);
if (is_null($result)) {
    http_response_code(400);
    die(encode_json(['message' => "There was an error updating profile. Is the UCID registered?", 'error' => true]));
} else {
    http_response_code(200);
    die(encode_json(['message' => $result, 'error' => false]));

}