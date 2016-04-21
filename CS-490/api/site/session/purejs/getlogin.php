<?php
include '../../../common.php';
session_start();
if (!isset($_SESSION['ucid'])) {
    die(json_encode(['message' => "User has not logged in yet.", 'error' => true]));
}
die(json_encode(['message' => ['ucid' => $_SESSION['ucid'], 'pass' => $_SESSION['pass']], 'error' => false]));