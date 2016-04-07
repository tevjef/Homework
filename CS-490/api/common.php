<?php

if( strpos( $_SERVER['SERVER_SOFTWARE'], 'Apache') !== false) {
    error_reporting( error_reporting() & ~E_NOTICE );
}

function postRequest($url, $headers, $fields) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $data = curl_exec($ch);
    $err = curl_error($ch);
    curl_close($ch);
    if ($err) {
        return "cURL Error #:" . $err;
    } else {
        return $data;
    }
}

function selectUser($ucid) {
    $fields = "opcode=2&ucid={$ucid}";
    $result = postToDatabase($fields);

    if (isset($result['search_profileID'])) {
        $username = $result['username'];
        $profileId = $result['search_profileID'];
        $email = $result['email'];
        $profile = selectProfile($profileId);

        $json = ['ucid' => $ucid, 'username' => $username, 'email' => $email, 'profile' => $profile];
        return $json;
    }
    return null;
}

function getPasswordId($ucid) {
    $fields = "opcode=2&ucid={$ucid}";
    $result = postToDatabase($fields);
    if (isset($result['passwordID'])) {
        return $result['passwordID'];
    } else {
        return null;
    }
}

function getProfileId($ucid) {
    $fields = "opcode=2&ucid={$ucid}";
    $result = postToDatabase($fields);
    $profileid = isset($result['search_profileID'])? $result['search_profileID']:'';
    if (empty($profileid)) {
        return null;
    }
    return $profileid;
}

function updateUser($ucid, $username, $last, $first, $password, $profileId) {
    //ucid mandatory
    $passId = getPasswordId($ucid);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $fields = "opcode=3&ucid={$ucid}&passwordID={$passId}";
    if (!empty($username)) {
        $fields .= "&username={$username}";
    }
    if (!empty($last)) {
        $fields .= "&lastname={$last}";
    }
    if (!empty($first)) {
        $fields .= "&firstname={$first}";
    }
    if (!empty($password)) {
        $fields .= "&password={$password}";
    }
    if (!empty($profileId)) {
        $fields .= "&search_profileID={$profileId}";
    }

    $result = postToDatabase($fields);
    $message = $result['message'];
    if (strpos($message, 'updated') !== FALSE) {
        return selectUser($ucid);
    } else {
        return null;
    }

}

function createProfile($ucid, $firstname, $lastname, $relationshipId, $classId, $genderId, $status, $image) {
    $result = selectUser($ucid);
    if (!is_null($result['profile'])) {
        return null;
    }
    $profileId = initProfile($firstname, $lastname);
    $result = updateUser($ucid,"","","","",$profileId);
    if (is_null($result)) {
        return null;
    }
    $fields = "opcode=7&profileID={$profileId}";
    if (!empty($lastname)) {
        $lastname = addslashes($lastname);
        $fields .= "&lastname={$lastname}";
    }
    if (!empty($firstname)) {
        $firstname = addslashes($firstname);
        $fields .= "&firstname={$firstname}";
    }
    if (!empty($relationshipId)) {
        $fields .= "&search_relationshipID={$relationshipId}";
    }
    if (!empty($genderId)) {
        $fields .= "&search_genderID={$genderId}";
    }
    if (!empty($classId)) {
        $fields .= "&search_gradeID={$classId}";
    }
    if (!empty($status)) {
        $status = addslashes($status);
        $fields .= "&status={$status}";
    }
    if (!empty($image)) {
        $fields .= "&profilePicPath={$image}";
    }
    $result = postToDatabase($fields);
    $message = $result['message'];

    if (strpos($message, 'updated') !== FALSE) {
        return selectUser($ucid);
    } else {
        return null;
    }
}


function updateProfile($ucid, $firstname, $lastname, $relationshipId, $classId, $genderId, $status, $image) {
    $profileId = getProfileId($ucid);
    if (is_null($profileId)) {
        return null;
    }
    $fields = "opcode=7&profileID={$profileId}";
    if (!empty($lastname)) {
        $lastname = addslashes($lastname);
        $fields .= "&lastname={$lastname}";
    }
    if (!empty($firstname)) {
        $firstname = addslashes($firstname);
        $fields .= "&firstname={$firstname}";
    }
    if (!empty($relationshipId)) {
        $fields .= "&search_relationshipID={$relationshipId}";
    }
    if (!empty($genderId)) {
        $fields .= "&search_genderID={$genderId}";
    }
    if (!empty($classId)) {
        $fields .= "&search_gradeID={$classId}";
    }
    if (!empty($status)) {
        $status = addslashes($status);
        $fields .= "&status={$status}";
    }
    if (!empty($image)) {
        $image = addslashes($image);
        $fields .= "&profilePicPath={$image}";
    }
    $result = postToDatabase($fields);
    $message = $result['message'];

    if (strpos($message, 'updated') !== FALSE) {
        return selectUser($ucid);
    } else {
        return null;
    }
}

function initProfile($firstname, $lastname) {
    $fields = "opcode=5&firstname={$firstname}&lastname={$lastname}";
    $result = postToDatabase($fields);
    $profileId = $result['profileID'];
    return $profileId;
}

function selectProfile($profileId) {
    $fields = "opcode=6&profileID={$profileId}";
    $result = postToDatabase($fields);
    if (!isset($result['profileID'])) return null;

    $grade = getGrade($result['search_gradeID']);
    $relationship = getRelationship($result['search_relationshipID']);
    $gender = getGender($result['search_genderID']);

    $json = ['first_name' => $result['firstName'],'last_name' => $result['lastName'],
        'class_level' => $grade, 'relationship' => $relationship, 'gender' => $gender, 'about' => $result['status'],
        'image' => $result['profilePicPath']];
    return $json;
}



function createUser($user, $pass, $email, $ucid) {
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $fields = "opcode=1&username={$user}&password={$pass}&ucid={$ucid}&email={$email}";
    $result = postToDatabase($fields);
    if (strpos(strtolower($result['message']), 'exists') !== FALSE) {
        return null;
    }
    return selectUser($ucid);
}

function checkPassword($user, $pass){
    $fields = "opcode=2&ucid={$user}";
    $result = postToDatabase($fields);
    if (password_verify($pass, $result['password'])) {
        return true;
    } else {
        return false;
    }
}

function postToDatabase($fields) {
    //var_dump($fields);
    $result = postRequest('https://web.njit.edu/~maz9/DB/P2/', [], $fields);
    //var_dump($result);
    return json_decode($result, true);
}

function loginNjit($user, $pass) {
    $headers = array(
        'Origin' => 'https://www.njit.edu',
        'Accept-Encoding' => 'gzip, deflate',
        'Accept-Language' => 'en-US,en;q=0.8',
        'Upgrade-Insecure-Requests' => '1',
        'User-Agent' => 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36',
        'Content-Type' => 'application/x-www-form-urlencoded',
        'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
        'Cache-Control' => 'max-age=0',
        'Referer' => 'https://www.njit.edu/cp/login.php',
        'Connection' => 'keep-alive',
        'DNT' => '1',
    );
    $fields = "user={$user}&pass={$pass}&uuid=0xACA021";
    return postRequest('https://cp4.njit.edu/cp/home/login', $headers, $fields);
}


/*
 * 1 Freshman
 * 2 Sophomore
 * 3 Junior
 * 4 Senior
 * */

function getGrade($gradeID) {
    switch ($gradeID) {
        case 1:
            return "Freshman";
        case 2:
            return  "Sophomore";
        case 3:
            return "Junior";
        case 4:
            return "Senior";
        default:
            return "Error getting grade, should not happen";
    }
}


/*
 * 1 Single
 * 2 Dating
 * 3 Married
 * 4 Complicated
 * */

function getRelationship($relationshipID) {
    switch ($relationshipID) {
        case 1:
            return "Single";
        case 2:
            return "Dating";
        case 3:
            return "Married";
        case 4:
            return "Complicated";
        default:
            return "Error getting relationship, should not happen";
    }
}

function getGender($genderID) {
    switch ($genderID) {
        case 1:
            return "Male";
        case 2:
            return "Female";
        case 3:
            return "Other";
        default:
            return "Error getting gender, should not happen";
    }
}

function encode_json($value) {
    return json_encode($value, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}


function getUploaded() {
    if (!empty($_FILES["file"]["name"])) {
        $target_dir = "uploads/";
        if (strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false) {
            $target_dir = $_SERVER["CONTEXT_DOCUMENT_ROOT"] . '/api/profile/uploads/';
        }
        $file_name = $_SERVER['REQUEST_TIME'] * 1000 . '_' . basename($_FILES["file"]["name"]);
        $target_file = $target_dir . $file_name;

        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["file"]["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                http_response_code(400);
                die(encode_json(['message' => "Bad request - File provided was not a png, jpeg or gif. " . $check["mime"] . ".", 'error' => true]));
            }
        }

        // Check file size
        if ($_FILES["file"]["size"] > 5000000) {
            http_response_code(413);
            die(encode_json(['message' => "Payload too large - File provided was too large. Must be less than 5MB", 'error' => true]));
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            http_response_code(400);
            die(encode_json(['message' => "Bad request - File provided was not a png, jpeg or gif.", 'error' => true]));
        }

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            return 'http://web.njit.edu/~tj76/api/profile/uploads/' . $file_name;
        } else {
            return "";
        }
    }
}