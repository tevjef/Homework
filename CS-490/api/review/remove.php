<?php

include '../common.php';

//var_dump($_POST);
$review_id = isset($_POST["review_id"])? $_POST["review_id"]:'';

if (empty($review_id)) {
    http_response_code(400);
    die(encode_json(['message' => "Bad Request - Must provide review_id when removing a review.", 'error' => true]));
}

$result = removeReviews($review_id);

if (is_null($result)) {
    die(encode_json(['message' => "There was an error", 'error' => false]));
} else {
    die(encode_json(['message' => $result , 'error' => false]));
}