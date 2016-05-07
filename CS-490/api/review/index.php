<?php

include '../common.php';

//var_dump($_POST);
$professor_id = isset($_POST["professor_id"])? $_POST["professor_id"]:'';
$class_id = isset($_POST["class_id"])? $_POST["class_id"]:'';
$ucid = isset($_POST["ucid"])? $_POST["ucid"]:'';

if (empty($professor_id) && empty($ucid) && empty($class_id)) {
    http_response_code(400);
    die(encode_json(['message' => "Bad Request - Must provide professor_id or ucid or class_id selecting  a review.", 'error' => true]));
}

$result = "";

if (!empty($professor_id)) {
    $result = selectProfessorReviews($professor_id);
    die(encode_json(['message' => "Selecting professor reviews", 'professor' => $result, 'error' => false]));

} elseif(!empty($ucid)) {
    $result = selectUserOptions($ucid, ['reviews' => true]);
    die(encode_json(['message' => "Selecting student reviews", 'reviews' => $result, 'error' => false]));
} elseif(!empty($class_id)) {
    $result = selectReviewsByClass($class_id);
    die(encode_json(['message' => "Selecting class reviews", 'class' => $result, 'error' => false]));
}

if (is_null($result)) {
    http_response_code(400);
    die(encode_json(['message' => "There was an error selecting review.", 'error' => true]));
} else {
    http_response_code(200);
    die(encode_json(['message' => "Reviews selected", 'review' => $result, 'error' => false]));
}