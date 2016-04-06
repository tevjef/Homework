<?php

include '../common.php';


$ucid = isset($_POST["ucid"])? $_POST["ucid"]:'';
$user_pass = isset($_POST["user_pass"])? $_POST["user_pass"]:'';
$user_name = isset($_POST["user_name"])? $_POST["user_name"]:'';
$first_name = isset($_POST["first_name"])? $_POST["first_name"]:'';
$last_name = isset($_POST["last_name"])? $_POST["last_name"]:'';

if (empty($ucid) || empty($user_pass)) {
    http_response_code(400);
    encode_json(['message'=> "Bad Request - Must provide the ucid, user_pass when updating account", 'error' => true]);
}

$result = updateUser($ucid, $user_name, $last_name, $first_name, $user_pass);
if (!is_null($result)) {
    http_response_code(200);
    return encode_json(['message'=> "Account updated", 'account' => [$result], 'error' => false]);
} else {
    http_response_code(400);
    return encode_json(['message'=> "There was an error updating account", 'account' => [$result], 'error' => true]);
}