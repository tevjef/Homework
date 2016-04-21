<?php
session_start();
include 'common.php';
?>
<!DOCTYPE html>
<html>
<body>
<div>
    <form id="form-login-account" method="post">
        <div class="form">
            <h3>Login into account</h3>
            <label>UCID:</label><input type="text" placeholder="ucid" name="ucid" class="input-box">
            <label>Password:</label><input type="password" placeholder="pass" name="pass" class="input-box"><br><br>
            <input type="submit" value="Submit">
        </div>
        <div class="right details">
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (empty($_POST['ucid']) || empty($_POST['pass'])) {
                    echo "Your ucid or password is empty";
                    exit(-1);
                }
                $result = login($_POST['ucid'], $_POST['pass']);
                if ($result['error']) {
                    echo "<p>";
                    echo $result['message'];
                    echo "</p>";
                } else {
                    $_SESSION['ucid'] = $result['account']['ucid'];
                    header('Location: '.URL.'php/profile.php?ucid='.$result['account']['ucid']);
                }
            }
        ?>
        </div>
    </form>
</div>
</body>
</html>