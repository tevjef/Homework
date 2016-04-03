<?php

$first_name = isset($_POST["first_name"])? $_POST["first_name"]:'';
$last_name = isset($_POST["last_name"])? $_POST["last_name"]:'';
$class_level = isset($_POST["class_level"])? $_POST["class_level"]:'';
$about = isset($_POST["about"])? $_POST["about"]:'';
$interests = isset($_POST["interests"])? $_POST["interests"]:'';
$relationship = isset($_POST["relationship"])? $_POST["relationship"]:'';
$gender = isset($_POST["gender"])? $_POST["gender"]:'';

if (empty($first_name) || empty($last_name) || empty($class_level) || empty($gender) || empty($interests) || empty($relationship) || empty($relationship)) {
    http_response_code(400);
    die(json_encode(['message' => "Bad Request - Must provide first_name, last_name, about, interests, gender [1(male), 2(Female), 3(Other)], class_level [1(Freshman), 2(Sophomore), 3 (Junior), 4 (Senior)], relationship  [1 (Single), 2 (Dating), 3 (Married), 4 (Complicated)] fields creating a profile.", 'error' => true]));
}

$result = createProfile($first_name, $last_name, $relationship, $class_level, $gender, $about);