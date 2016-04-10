<?php

include '../common.php';

//var_dump($_POST);
$ucid = isset($_POST["ucid"])? $_POST["ucid"]:'';
$first_name = isset($_POST["first_name"])? $_POST["first_name"]:'';
$last_name = isset($_POST["last_name"])? $_POST["last_name"]:'';
$class_level = isset($_POST["class_level"])? $_POST["class_level"]:'';
$about = isset($_POST["about"])? $_POST["about"]:'';
$relationship = isset($_POST["relationship"])? $_POST["relationship"]:'';
$gender = isset($_POST["gender"])? $_POST["gender"]:'';
$image = getUploaded();
$interests = isset($_POST['interests'])?$_POST['interests']:[];

if (empty($ucid) || empty($first_name) || empty($last_name) || empty($class_level) || empty($gender) || empty($relationship) || empty($about)) {
    http_response_code(400);
    die(encode_json(['message' => "Bad Request - Must provide ucid, first_name, last_name, about, gender
     [1, 2, 3] => [Male, Female, Other], class_level [1, 2, 3, 4] => [ Freshman, Sophomore, Junior, Senior]
, relationship  [1, 2, 3, 4] => [Single, Dating, Married, Complicated] fields when creating a profile.", 'error' => true]));
}

$result = createProfile($ucid, $first_name, $last_name, $relationship, $class_level, $gender, $about, $image, $interests);
if (is_null($result)) {
    http_response_code(400);
    die(encode_json(['message' => "There was an error creation profile. Is the UCID registered? Does the profile already exist?", 'error' => true]));
} else {
    http_response_code(200);
    die(encode_json(['message' => "The profile was created", 'account' => $result, 'error' => false]));
}