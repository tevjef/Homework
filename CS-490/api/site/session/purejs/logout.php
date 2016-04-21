<?php
include '../../../common.php';
session_start();

unset($_SESSION['ucid']);
unset($_SESSION['pass']);

session_destroy();
die(json_encode(['message' => "Session ended", 'error' => false]));
