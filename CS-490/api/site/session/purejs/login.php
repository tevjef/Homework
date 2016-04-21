<?php
include '../../../common.php';
session_start();

$ucid  = isset($_POST['ucid'])?$_POST['ucid']:'';
$password  = isset($_POST['pass'])?$_POST['pass']:'';

if (empty($ucid)) {
    die(json_encode(['message' => "Bad Request - Must provide the ucid to save session", 'error' => true]));
}

$_SESSION['ucid'] = $ucid;
$_SESSION['pass'] = $password;

die(json_encode(['message' => "Session started with ucid = $ucid", 'error' => false]));
