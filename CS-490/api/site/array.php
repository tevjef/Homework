<?php

$numbers = isset($_POST["number"])? $_POST["number"]:[];
// Filter out empty strings
$numbers = array_filter($numbers);

if(empty($numbers)) {
    die("No numbers was sent");
}

foreach ($numbers as $number) {
    echo $number . "\r\n";
}