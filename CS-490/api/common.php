<?php

if( str_compare( $_SERVER['SERVER_SOFTWARE'], 'Apache')) {
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


function getRecommendedPeople($profileId) {
    $ids = selectSimilarPeople($profileId);

    return $ids;
}

function selectSimilarPeople($profile_id){
    $fields = "opcode=0&sql=SELECT firstname, lastname, profilePicPath, profileID, intrestName, ucid, email, username FROM profiles JOIN profileIntrests
    ON profiles.profileID = profileIntrests.search_profileID JOIN intrests ON intrests.intrestID = profileIntrests.search_intrestID
    JOIN passwords ON passwords.search_profileID = profiles.profileID WHERE intrestID IN (
SELECT intrestID FROM profiles JOIN profileIntrests ON profiles.profileID = profileIntrests.search_profileID JOIN intrests
ON intrests.intrestID = profileIntrests.search_intrestID JOIN passwords ON passwords.search_profileID = profiles.profileID
WHERE profiles.profileID = $profile_id) AND profiles.profileID <> $profile_id";

    $result = postToDatabase($fields);
    $arr = [];
    foreach ($result['data'] as $value) {
        array_push($arr, ['id' => $value['profileID'],
            'ucid' =>  $value['ucid'],
            'first_name' =>  $value['firstname'],
            'last_name' =>  $value['lastname'],
            'username' =>  $value['username'],
            'email' =>  $value['email'],
            'image' =>  $value['profilePicPath'],
            'reason' =>  $value['intrestName']
        ]);
    }
    return $arr;
}

function getRecommendedGroups($profileId) {
    $ids = selectSimilarGroups($profileId);
    return $ids;
}


function selectSimilarGroups($profile_id){
    $fields = "opcode=0&sql=SELECT groupID, groupName, intrestName FROM groups
    JOIN groupsIntrests ON groups.groupID = groupsIntrests.search_groupID
    JOIN intrests ON intrests.intrestID = groupsIntrests.search_intrestID WHERE intrestID IN (
    SELECT intrestID FROM profiles JOIN profileIntrests ON profiles.profileID = profileIntrests.search_profileID
    JOIN intrests ON intrests.intrestID = profileIntrests.search_intrestID
    JOIN passwords ON passwords.search_profileID = profiles.profileID WHERE profiles.profileID = $profile_id)";

    $result = postToDatabase($fields);
    $arr = [];
    foreach ($result['data'] as $value) {
        array_push($arr, ['id' => $value['groupID'], 'name' =>  $value['groupName'], 'reason' =>  $value['intrestName']]);
    }
    return $arr;
}

function createReview($ucid, $class_id, $professor_id, $rating, $text) {
    date_default_timezone_set('UTC');
    $timestamp = date('Y-m-d H:i:s',time()) ;
    $profileId = getProfileId($ucid);
    $fields = "opcode=26&professorID=$professor_id&studentID=$profileId&classID=$class_id&timegiven=$timestamp&reviewgrade=$rating&reviewtext=$text";
    $result = postToDatabase($fields);

    $message = $result['message'];
    if (!str_compare($message, "created review")) {
        die(encode_json(['message' => "There was an error creation review. Does the user or professor exists?", 'error' => true]));
    } else {
        return selectProfessorReviews($professor_id);
    }
}
//SELECT reviewText FROM reviews WHERE reviewID = 11

function selectProfessorReviews($professor_id) {
    $fields = "opcode=24&professorID=$professor_id";
    $result = postToDatabase($fields);

    $name = selectProfessorName($professor_id);
    if (count($result['message']['data']) == 0) {
        die(encode_json(['message' => "This professor does not exist.", 'error' => true]));
    } else {
        $average = $result['globalaverage']['grade'];
        $reviews = selectReviews($professor_id);
        $review = ['id' => $professor_id, 'name' => $name, 'average' => $average, 'reviews' => $reviews];
        return $review;
    }
}

function removeReviews($review_id) {
    $fields = "opcode=0&sql=DELETE FROM reviews WHERE reviewID = $review_id";
    $result = postToDatabase($fields);
    return ['result' => $result];
}

function selectReviews($professor_id) {
    $fields = "opcode=0&sql=SELECT reviews.*, classes.className, professorName FROM reviews JOIN classes ON
    classes.classID = reviews.search_classID JOIN professors ON professorID = reviews.search_professorID
    WHERE search_professorID=$professor_id ORDER BY timegiven DESC";
    $result = postToDatabase($fields);
    date_default_timezone_set('UTC');
    $arr = [];
    foreach ($result['data'] as $value) {
        array_push($arr, ['id' => $value['reviewID'], 'class' => $value['className'],
            'time' => date("F j, Y, g:i a", strtotime($value['Timegiven'])),
            'rating' => $value['Reviewgrade'], 'review' => $value['ReviewText']]);
    }
    return $arr;
}

function selectStudentReviews($profile_id) {
    $fields = "opcode=0&sql=SELECT reviews.*, classes.className, professorName FROM reviews JOIN classes ON
    classes.classID = reviews.search_classID JOIN professors ON professorID = reviews.search_professorID
    WHERE search_studentprofileID=$profile_id ORDER BY timegiven DESC";
    $result = postToDatabase($fields);
    $arr = [];
    date_default_timezone_set('UTC');
    foreach ($result['data'] as $value) {
        array_push($arr, ['id' => $value['reviewID'],  'professor_id' => $value['search_professorID'], 'name' => $value['professorName'],
            'class' => $value['className'], 'time' => date("F j, Y, g:i a", strtotime($value['Timegiven'])) ,
            'rating' => $value['Reviewgrade'], 'review' => $value['ReviewText']]);
    }
    return $arr;
}


function selectProfessorName($professor_id) {
    $fields = "opcode=0&sql=SELECT professorName FROM professors WHERE professorID=$professor_id";
    $result = postToDatabase($fields);
    return $result['data'][0]['professorName'];
}


function createGroup($ucid, $groupName, $interests) {
    $profileId = getProfileId($ucid);
    $fields = "opcode=18&groupName=$groupName&ownerID=$profileId";
    $result = postToDatabase($fields);

    $message = $result['message'];
    if (str_compare($message, 'Exists')) {
        die(encode_json(['message' => "There was an error creation group.  $groupName already exists", 'error' => true]));
    } else if (strcmp($message, 'inserted')) {
        $groupId = $result['groupID'];
        if(updateGroup($groupId, $groupName, $profileId, $interests)) {
            return selectUserOptions($ucid, ["groups_own" => true]);
        }
    }
    return null;
}

function searchGroupsByName($keyword) {
    /*SELECT * FROM groups WHERE groupName LIKE '%%'*/
    $fields = "opcode=0&sql=SELECT * FROM groups WHERE groupName LIKE '%$keyword%'";
    $result = postToDatabase($fields);
    $arr = [];
    foreach ($result['data'] as $value) {
        array_push($arr, ['id' => $value['groupID'], 'name' => $value['groupName']]);
    }
    return $arr;
}

function searchGroupsByInterest($interest_id) {
    $fields = "opcode=0&sql=SELECT groups.* FROM groups JOIN groupsIntrests ON groupID = search_groupID JOIN
    intrests ON intrestID = search_intrestID WHERE intrestID = $interest_id";
    $result = postToDatabase($fields);
    $arr = [];
    foreach ($result['data'] as $value) {
        array_push($arr, ['id' => $value['groupID'], 'name' => $value['groupName']]);
    }
    return $arr;
}

function deleteGroup($group_id) {
    $fields = "opcode=22&groupID=$group_id";
    $result = postToDatabase($fields);
    return str_compare($result['message'], "Deleted");
}

function updateGroup($groupId, $groupName, $ownerID, $interests) {
    $fields = "opcode=21&groupID=$groupId";

    if (!empty($groupName)) {
        $groupName = addslashes($groupName);
        $fields .= "&groupName=$groupName";
    }
    if (!empty($ownerID)) {
        $fields .= "&ownerID=$ownerID";
    }
    $fields .= "&intrestsIDs=". json_encode($interests);
    $result = postToDatabase($fields);

    return str_compare($result['message'], 'updated');
}

function selectProfileGroups($profileId) {
    $fields = "opcode=20&ownerID=$profileId";
    $result = postToDatabase($fields);
    $groups = [];
    foreach ($result['data'] as $value) {
        array_push($groups, selectGroup($value['groupID'], ['interests' => true]));
    }
    return $groups;
}

function selectGroup($groupId, $options = []) {
    $fields = "opcode=19&groupID=$groupId";
    $result = postToDatabase($fields);

    if (!isset($result['data']['search_ownerprofileID'])) {
        return null;
    }
    $ownerUcid = getUcid($result['data']['search_ownerprofileID']);


    $group = ['id' => $groupId, 'name' => $result['data']['groupName'],
        'ownerId' => $result['data']['search_ownerprofileID'],
        'ownerUcid' => $ownerUcid,];

    if (isset($options['posts'])?$options['posts']:false) {
        $group['posts'] = selectGroupPosts($groupId);
    }
    if (isset($options['interests'])?$options['interests']:false) {
        $interests = [];

        foreach($result['data']['intrests'] as $value) {
            array_push($interests, ['id' => $value['intrestID'], 'name' => $value['intrestName']]);
        }
        $group['interests'] = $interests;
    }
    return $group;
}

function createGroupPost($group_id, $from_ucid,$postText) {
    $from_profileId = getProfileId($from_ucid);
    date_default_timezone_set('UTC');
    $timestamp = date('Y-m-d H:i:s',time()) ;
    $fields = "opcode=9&posterID=$from_profileId&groupID=$group_id&postText=$postText&timeStamp=$timestamp";
    $result = postToDatabase($fields);
    $message = $result['message'];
    $postId = $result['postID'];
    if (str_compare($message, 'Inserted')) {
        return true;
    } else {
        return null;
    }
}

function selectGroupPosts($groupId) {
    $fields = "opcode=11&groupID={$groupId}";
    $result = postToDatabase($fields);
    $posts = [];
    date_default_timezone_set('UTC');
    foreach ($result['data'] as $item) {
        array_push($posts, ['id' => $item['postID'], 'postText' => $item['postText'], 'timeStamp' =>  date("F j, Y, g:i a", strtotime($item['timeStamp'])),
            'posted_by' => getCacheProfile($item['search_senderprofileID'])]);
    }
    return $posts;
}

function isAdmin($ucid) {
    $profileId = getProfileId($ucid);
    $fields = "opcode=16&profileID=$profileId";
    $result = postToDatabase($fields);
    return str_compare($result['message'], "is admin");
}

function createProfilePost($to_ucid, $from_ucid, $postText) {
    $to_profileId = getProfileId($to_ucid);
    $from_profileId = getProfileId($from_ucid);
    date_default_timezone_set('UTC');
    $timestamp = date('Y-m-d H:i:s',time()) ;
    $fields = "opcode=9&posterID={$from_profileId}&profileID={$to_profileId}&postText={$postText}&timeStamp={$timestamp}";
    $result = postToDatabase($fields);
    $message = $result['message'];
    if (str_compare($message, 'Inserted')) {
        return true;
    } else {
        return null;
    }
}

function deletePost($post_id) {
    $fields = "opcode=13&postID=$post_id";
    $result = postToDatabase($fields);
    return str_compare($result['message'], "Deleted");
}


function selectProfilePosts($profileId) {
    $fields = "opcode=11&profileID={$profileId}";
    $result = postToDatabase($fields);
    $posts = [];
    foreach ($result['data'] as $item) {
        date_default_timezone_set('EST');
        array_push($posts, ['id' => $item['postID'], 'postText' => $item['postText'], 'timeStamp' => date("F j, Y, g:i a", strtotime($item['timeStamp'])),
            'posted_by' => getCacheProfile($item['search_senderprofileID'])]);
    }
    return $posts;
}

function insertInterest($profileId, $interestId) {
    $fields = "opcode=0&sql=INSERT INTO profileIntrests (search_profileID, search_intrestID) VALUES ($profileId, $interestId)
     ON DUPLICATE KEY UPDATE search_intrestID=search_intrestID";
    $result = postToDatabase($fields);
    $message = $result['message'];
    if (str_compare($message, 'worked')) {
        return true;
    } else {
        return false;
    }
}

function selectInterests($profileId) {
    $fields = "opcode=0&sql=SELECT intrestID, intrestName FROM profileIntrests JOIN intrests ON intrests.intrestID =
     profileIntrests.search_intrestID WHERE search_profileID = $profileId ORDER BY intrestName";
    $result = postToDatabase($fields);
    $arr = [];
    foreach ($result['data'] as $val) {
        array_push($arr, ['id' => $val['intrestID'], 'name' => $val['intrestName']]);
    }
    return $arr;
}

function getCacheProfile($profileId) {
    if (!isset($GLOBALS['profileCache'][$profileId])) {
        $GLOBALS['profileCache'][$profileId] = selectSmallProfile($profileId);
    }
    return $GLOBALS['profileCache'][$profileId];
}

function selectUser($ucid) {
    return selectUserOptions($ucid, ['profile' => true]);
}

function selectUserOptions($ucid, $options = []) {
    $fields = "opcode=2&ucid=$ucid";
    $result = postToDatabase($fields);

    if (isset($result['username'])) {
        $username = $result['username'];
        $profileId = $result['search_profileID'];
        $email = $result['email'];

        $json = ['ucid' => $ucid, 'username' => $username, 'email' => $email];
        if (isset($options['profile'])?$options['profile']:false) {
            $json['profile'] = selectProfile($profileId);
        }
        if (isset($options['posts'])?$options['posts']:false) {
            $json['profile']['posts'] = selectProfilePosts($profileId);
        }
        if (isset($options['interests'])?$options['interests']:false) {
            $json['profile']['interests'] = selectInterests($profileId);
        }
        if (isset($options['groups_own'])?$options['groups_own']:false) {
            $json['profile']['groups_own'] = selectProfileGroups($profileId);
        }
        if (isset($options['reviews'])?$options['reviews']:false) {
            $json['reviews'] = selectStudentReviews($profileId);
        }
        if (isset($options['recommend_people'])?$options['recommend_people']:false) {
            $json['profile']['recommend_people'] = getRecommendedPeople($profileId);
        }
        if (isset($options['recommend_groups'])?$options['recommend_groups']:false) {
            $json['profile']['recommend_groups'] = getRecommendedGroups($profileId);
        }
        return $json;
    } else {
        die(encode_json(['message' => "There was an error retrieving user profile." . json_encode($result), 'error' => true]));
    }
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
    if (!isset($GLOBALS['ucidCache'][$ucid])) {
        $fields = "opcode=2&ucid={$ucid}";
        $result = postToDatabase($fields);
        $profileId = isset($result['search_profileID'])? $result['search_profileID']:'';
        if (empty($profileId)) {
            return null;
        }
        $GLOBALS['ucidCache'][$ucid] =  $profileId;
    }
    return $GLOBALS['ucidCache'][$ucid];
}

function getUcid($profileId) {
    $fields = "opcode=15&profileID=$profileId";
    $result = postToDatabase($fields);
    if (isset($result['ucid'])) {
        return $result['ucid'];
    }
    return null;
}

function searchUsersByInterest($interest_id) {
    $fields = "opcode=0&sql=SELECT * FROM profiles JOIN profileIntrests
    ON profileID = search_profileID JOIN intrests ON intrestID = search_intrestID
    JOIN passwords ON passwords.search_profileID = profiles.profileID
    WHERE intrestID = $interest_id";
    $result = postToDatabase($fields);
    $arr = [];
    foreach ($result['data'] as $value) {
        array_push($arr, ['profile_id' => $value['profileID'],
            'first_name' => $value['firstName'],
            'last_name' => $value['lastName'],
            'image' => $value['profilePicPath'],
            'username' => $value['username'],
            'ucid' => $value['ucid'],
            'email' => $value['email'],
        ]);
    }
    return $arr;
}

function searchUsersByName($name) {
    $fields = "opcode=0&sql=SELECT * FROM profiles
    LEFT JOIN passwords ON passwords.search_profileID = profiles.profileID
    WHERE firstName LIKE '%$name%' OR lastName LIKE '%$name%'";
    $result = postToDatabase($fields);
    $arr = [];
    foreach ($result['data'] as $value) {
        array_push($arr, ['profile_id' => $value['profileID'],
            'first_name' => $value['firstName'],
            'last_name' => $value['lastName'],
            'image' => $value['profilePicPath'],
            'username' => $value['username'],
            'ucid' => $value['ucid'],
            'email' => $value['email'],
        ]);
    }
    return $arr;
}

function searchUsersByUcid($ucid) {
    $fields = "opcode=0&sql=SELECT * FROM profiles JOIN profileIntrests
    ON profileID = search_profileID JOIN intrests ON intrestID = search_intrestID
    JOIN passwords ON passwords.search_profileID = profiles.profileID
    WHERE ucid LIKE '%$ucid%'";
    $result = postToDatabase($fields);
    $arr = [];
    foreach ($result['data'] as $value) {
        array_push($arr, ['profile_id' => $value['profileID'],
            'first_name' => $value['firstName'],
            'last_name' => $value['lastName'],
            'image' => $value['profilePicPath'],
            'username' => $value['username'],
            'ucid' => $value['ucid'],
            'email' => $value['email'],
        ]);
    }
    return $arr;
}

function updateUser($ucid, $username, $last, $first, $password, $profileId) {
    //ucid mandatory
    $passId = getPasswordId($ucid);
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
        $password = password_hash($password, PASSWORD_DEFAULT);
        $fields .= "&password={$password}";
    }
    if (!empty($profileId)) {
        $fields .= "&search_profileID={$profileId}";
    }

    $result = postToDatabase($fields);
    $message = $result['message'];
    if (str_compare($message, 'updated')) {
        return selectUser($ucid);
    } else {
        return null;
    }

}

function createProfile($ucid, $firstname, $lastname, $relationshipId, $classId, $genderId, $status, $image, $interests) {
    // Check if profile already exists
    /*    $result = selectUser($ucid);
        if (!is_null($result['profile'])) {
            return null;
        }*/
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
    if (str_compare($message, 'updated')) {
        foreach ($interests as $key => $value) {
            insertInterest($profileId, $value);
        }
        return selectUserOptions($ucid, ['profile' => true, 'interests' => true]);
    } else {
        return null;
    }
}

function deleteUser($ucid) {
    $fields = "opcode=4&ucid=$ucid";
    $result = postToDatabase($fields);
    return str_compare($result['message'], "Deleted");
}

function updateProfile($ucid, $firstname, $lastname, $relationshipId, $classId, $genderId, $status, $image, $interests) {
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
    foreach ($interests as $key => $value) {
        insertInterest($profileId, $value);
    }

    if (!empty($firstname) || !empty($lastname) || !empty($classId) || !empty($genderId) || !empty($relationshipId) || !empty($status) || !empty($image)) {
        $result = postToDatabase($fields);
        $message = $result['message'];
        if (str_compare($message, 'updated')) {
            return selectUserOptions($ucid, ['profile' => true, 'interests' => true]);
        } else {
            return null;
        }
    }
    return selectUserOptions($ucid, ['profile' => true, 'interests' => true]);

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

    if (is_null($result['profilePicPath'])) {
        $result['profilePicPath'] = "http://i.imgur.com/cIiHMjg.png";
    }
    $json = ['profile_id' => $profileId, 'first_name' => $result['firstName'],'last_name' => $result['lastName'],
        'class_level' => $grade, 'relationship' => $relationship, 'gender' => $gender, 'about' => $result['status'],
        'image' => $result['profilePicPath']];
    return $json;
}

function selectSmallProfile($profileId) {
    $fields = "opcode=6&profileID={$profileId}";
    $result = postToDatabase($fields);
    if (!isset($result['profileID'])) return null;
    if (is_null($result['profilePicPath'])) {
        $result['profilePicPath'] = "http://i.imgur.com/cIiHMjg.png";
    }
    $json = ['profile_id' => $profileId, 'ucid' => getUcid($profileId), 'first_name' => $result['firstName'],'last_name' => $result['lastName'], 'image' => $result['profilePicPath']];
    return $json;
}

function createUser($user, $pass, $email, $ucid) {
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $fields = "opcode=1&username={$user}&password={$pass}&ucid={$ucid}&email={$email}";
    $result = postToDatabase($fields);
    if (str_compare(strtolower($result['message']), 'exists')) {
        return null;
    }
    return selectUser($ucid);
}

function checkPassword($user, $pass){
    $fields = "opcode=2&ucid={$user}";
    $result = postToDatabase($fields);
    if (isset($result['password']) && password_verify($pass, $result['password'])) {
        return true;
    } else {
        return false;
    }
}

function postToDatabase($fields) {
    //var_dump($fields);
    $result = postRequest('https://web.njit.edu/~maz9/DB/P3/', [], $fields);
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

function str_compare($str1, $str2) {
    return (strcmp(strtolower($str1), strtolower($str2) ) == 0);
}

function getUploaded() {
    if (!empty($_FILES["file"]["name"])) {
        $target_dir = "uploads/";
        if (strcmp($_SERVER['SERVER_SOFTWARE'], 'Apache')) {
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
            return 'https://web.njit.edu/~tj76/api/profile/uploads/' . $file_name;
        } else {
            return "";
        }
    }
}

function checkAuth() {
    if (!isset($_SERVER['PHP_AUTH_USER'])) {
        header('WWW-Authenticate: Basic realm="My Realm"');
        header('HTTP/1.0 401 Unauthorized');
        die(encode_json(['message' => "Must supply authorization header. http://stackoverflow.com/a/11960692/2238427", 'error' => true]));
    } else {
        if (!checkPassword($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'])) {
            die(encode_json(['message' => "UCID or Password is incorrect", 'error' => true]));
        }
    }
}

