<?php

include '../../common.php';

//var_dump($_POST);
$post_id = isset($_POST["post_id"])? $_POST["post_id"]:'';

if (empty($post_id)) {
    http_response_code(400);
    die(encode_json(['message' => "Bad Request - Must provide post_id when removing a post.", 'error' => true]));
}

$result = deletePost($post_id);

if (!$result) {
    die(encode_json(['message' => "There was an error", 'error' => false]));
} else {
    die(encode_json(['message' => "The post was deleted" , 'error' => false]));
}