<?php

include '../common.php';

$ucid = isset($_POST["ucid"])? $_POST["ucid"]:'';
$first_name = isset($_POST["first_name"])? $_POST["first_name"]:'';
$last_name = isset($_POST["last_name"])? $_POST["last_name"]:'';
$class_level = isset($_POST["class_level"])? $_POST["class_level"]:'';
$about = isset($_POST["about"])? $_POST["about"]:'';
$relationship = isset($_POST["relationship"])? $_POST["relationship"]:'';
$gender = isset($_POST["gender"])? $_POST["gender"]:'';
$image = isset($_POST["image"])? $_POST["image"]:'';

if (empty($ucid) || empty($first_name) || empty($last_name) || empty($class_level) || empty($gender) || empty($relationship) || empty($about) || empty($image)) {
    http_response_code(400);
    die(json_encode(['message' => "Bad Request - Must provide ucid, first_name, last_name, about, gender [1(male), 2(Female), 3(Other)], class_level [1(Freshman), 2(Sophomore), 3 (Junior), 4 (Senior)], relationship  [1 (Single), 2 (Dating), 3 (Married), 4 (Complicated)] and image fields creating a profile.", 'error' => true], JSON_PRETTY_PRINT));
}

$result = createProfile($ucid, $first_name, $last_name, $relationship, $class_level, $gender, $about, $image);
if (is_null($result)) {
    http_response_code(400);
    die(json_encode(['message' => "There was an error creation profile", 'error' => true]));
} else {
    http_response_code(200);
    die(json_encode(['message' => $result, 'error' => false], JSON_PRETTY_PRINT));

}