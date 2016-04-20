<?php
include '../common.php';
session_start();

$ucid  = isset($_POST['ucid'])?$_POST['ucid']:'';

if (empty($ucid)) {
    die(encode_json(['message' => "Bad Request - Must provide the ucid to save session", 'error' => true]));
}

$_SESSION['ucid'] = $ucid;

die(encode_json(['message' => "Session started with ucid = $ucid", 'error' => false]));
