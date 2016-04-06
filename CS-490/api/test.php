<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src="main.js"></script>
<link rel="stylesheet" href="styles.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<div class="left">
    <div style="padding: 5%">
    <form id="form-create-account" action="login/create.php" method="post">
            <div class="left">
                <h2>Creating an account</h2>
                <label for="ucid">UCID:</label><input type="text" placeholder="ucid" name="ucid" id="ucid">
                <label for="ucid">UCID Password:</label><input type="password" placeholder="ucid_pass" name="ucid_pass" id="ucid">
                <label for="ucid">Username:</label><input type="text" placeholder="user_name" name="user_name" id="ucid">
                <label for="ucid">Create Password:</label><input type="password" placeholder="user_pass" name="user_pass" id="ucid">
                <label for="ucid">Email:</label><input type="email" placeholder="email" name="email" id="ucid"><br><br>
                <input type="submit" value="Submit" name="submit-create-account">
            </div>
            <div class="right details">
                <p>Save ucid and user_pass to use to authenticate future requests demonstrate that this box of text works</p>
            </div>
    </form>
        </div>

</div>
<div style="position: fixed; top: 0; right: 0; height: 100%; float: right; width: 50%; background-color: #f0f0f0">
    <div class="results">
        <h3>Results</h3>
        <pre class="output">
        </pre>
    </div>
</div>
</body>
</html>