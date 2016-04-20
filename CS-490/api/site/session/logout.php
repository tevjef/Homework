<?php
include '../common.php';
session_start();

unset($_SESSION['ucid']);

session_destroy();

die(encode_json(['message' => "Session ended", 'error' => false]));
