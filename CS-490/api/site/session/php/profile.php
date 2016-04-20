<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
</head>
<body>
<?php

include 'common.php';

$signed_in_ucid = isset($_SESSION['ucid'])?$_SESSION['ucid']:'';
$ucid = isset($_GET['ucid'])?$_GET['ucid']:'';

$result = getProfile($ucid, $signed_in_ucid);
$first_name = $result['account']['profile']['first_name'];
$last_name = $result['account']['profile']['last_name'];
$gender = $result['account']['profile']['gender'];
echo "<h2> $first_name  $last_name </h2>";
echo "<h4>Gender:  $gender </h4>";

?>

</body>
</html>