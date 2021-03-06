<?php

include_once '../common.php';

$ucid = isset($_POST["ucid"])? $_POST["ucid"]:'';
$privileged_user = isset($_POST["signed_in_ucid"])? $_POST["signed_in_ucid"]:'';
$first_name = isset($_POST["first_name"])? $_POST["first_name"]:'';
$last_name = isset($_POST["last_name"])? $_POST["last_name"]:'';
$class_level = isset($_POST["class_level"])? $_POST["class_level"]:'';
$about = isset($_POST["about"])? $_POST["about"]:'';
$relationship = isset($_POST["relationship"])? $_POST["relationship"]:'';
$gender = isset($_POST["gender"])? $_POST["gender"]:'';
$image = getUploaded();
$interests = isset($_POST['interests'])?$_POST['interests']:[];

if (empty($ucid)) {
    http_response_code(400);
    die(encode_json(['message' => "Bad Request - Must provide ucid when updating a profile.", 'error' => true]));
}


$result = updateProfile($ucid, $first_name, $last_name, $relationship, $class_level, $gender, $about, $image, $interests);
if (is_null($result)) {
    http_response_code(400);
    die(encode_json(['message' => "There was an error updating profile. Is the UCID registered?", 'error' => true]));
} else {
    http_response_code(200);
    die(encode_json(['account' => $result, 'error' => false]));

}