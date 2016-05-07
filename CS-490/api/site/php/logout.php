<?php
session_start();

$message = "Session ended";
if (!isset($_SESSION['ucid'])) {
    $message ="A session was not previously set";
}

unset($_SESSION['ucid']);
unset($_SESSION['pass']);

session_destroy();
die(json_encode(['message' => $message, 'error' => false]));
