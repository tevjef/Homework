<?php

include '../common.php';

//var_dump($_POST);
$ucid = isset($_POST["ucid"])? $_POST["ucid"]:'';
$class_id = isset($_POST["class_id"])? $_POST["class_id"]:'';
$professor_id = isset($_POST["professor_id"])? $_POST["professor_id"]:'';
$rating = isset($_POST["rating"])? $_POST["rating"]:'';
$text = isset($_POST["text"])? $_POST["text"]:'';


if (empty($ucid) || empty($class_id) || empty($professor_id) || empty($rating) || empty($text)) {
    http_response_code(400);
    die(encode_json(['message' => "Bad Request - Must provide ucid, class_id, professor_id, rating, text
    when creating a review.", 'error' => true]));
}

$result = createReview($ucid, $class_id, $professor_id, $rating, $text);
if (is_null($result)) {
    http_response_code(400);
    die(encode_json(['message' => "There was an error creation review.", 'error' => true]));
} else {
    http_response_code(200);
    die(encode_json(['message' => "The review was created", 'review' => $result, 'error' => false]));
}