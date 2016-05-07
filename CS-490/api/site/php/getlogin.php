<?php
session_start();

include '../../common.php';
if (!isset($_SESSION['ucid'])) {
    die(json_encode(['message' => "User has not logged in yet.", 'error' => true]));
}
die(json_encode(['message' => ['ucid' => $_SESSION['ucid'],
    'pass' => $_SESSION['pass'],
    'admin' => isAdmin($_SESSION['ucid'])   ],
        'error' => false]));