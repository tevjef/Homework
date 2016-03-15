<?php

$first_name = isset($_POST["first_name"])? $_POST["first_name"]:'';
$last_name = isset($_POST["last_name"])? $_POST["last_name"]:'';
$class_level = isset($_POST["class_level"])? $_POST["class_level"]:'';
$email = isset($_POST["email"])? $_POST["email"]:'';
$about = isset($_POST["about"])? $_POST["about"]:'';
$interests = isset($_POST["interests"])? $_POST["interests"]:'';
$gender = isset($_POST["gender"])? $_POST["gender"]:'';

if (empty($first_name) || empty($last_name) || empty($class_level) || empty($email) || empty($gender)) {
    http_response_code(400);
    die("Bad Request - Must provide all the fields required when creating a profile.");
}

