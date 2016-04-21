<?php

include '../common.php';

//var_dump($_POST);
$professor_id = isset($_POST["professor_id"])? $_POST["professor_id"]:'';

$ucid = isset($_POST["ucid"])? $_POST["ucid"]:'';

if (empty($professor_id) && empty($ucid)) {
    http_response_code(400);
    die(encode_json(['message' => "Bad Request - Must provide professor_id or ucid selecting  a review.", 'error' => true]));
}

$result = "";

if (!empty($professor_id)) {
    $result = selectProfessorReviews($professor_id);
} elseif(!empty($ucid)) {
    $result = selectUserOptions($ucid, ['reviews' => true]);
    http_response_code(200);
    die(encode_json(['message' => "Reviews selected", 'account' => $result, 'error' => false]));
}
if (is_null($result)) {
    http_response_code(400);
    die(encode_json(['message' => "There was an error creation review.", 'error' => true]));
} else {
    http_response_code(200);
    die(encode_json(['message' => "Reviews selected", 'review' => $result, 'error' => false]));
}