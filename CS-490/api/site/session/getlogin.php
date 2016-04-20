<?php
include '../common.php';
session_start();
if (!isset($_SESSION['ucid'])) {
    die(encode_json(['message' => "User has not logged in yet.", 'error' => true]));
}

die(encode_json(['message' => $_SESSION['ucid'], 'error' => false]));
