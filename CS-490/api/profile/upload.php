<?php
$target_dir = "uploads/";
if( strpos( $_SERVER['SERVER_SOFTWARE'], 'Apache') !== false) {
    $target_dir = $_SERVER["CONTEXT_DOCUMENT_ROOT"] . '/api/profile/uploads/';
}
$file_name = $_SERVER['REQUEST_TIME'] * 1000 . '_' . basename($_FILES["file"]["name"]);
$target_file = $target_dir . $file_name;

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        http_response_code(400);
        die(json_encode(['message' => "Bad request - File provided was not a png, jpeg or gif. " . $check["mime"] . ".", 'error' => true]));
    }
}

// Check file size
if ($_FILES["file"]["size"] > 5000000) {
    http_response_code(413);
    die(json_encode(['message' => "Payload too large - File provided was too large. Must be less than 5MB", 'error' => true]));
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    http_response_code(400);
    die(json_encode(['message' => "Bad request - File provided was not a png, jpeg or gif.", 'error' => true]));
}

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    http_response_code(200);
    die(json_encode(['message' => "File upload successful", 'url' => "http://web.njit.edu/~tj76/api/profile/uploads/" . $file_name, 'error' => false]));

} else {
    http_response_code(400);
    die(json_encode(['message' => "Bad request - Please provide a file to upload.", 'error' => true]));
}