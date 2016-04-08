<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src="main.js"></script>
<link rel="stylesheet" href="styles.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

<body>
<div class="left">
        <form id="form-create-account" action="login/create.php" method="post">
                <div class="form">
                    <h3>Creating an account</h3>
                    <label>UCID:</label><input type="text" placeholder="ucid" name="ucid" id="input-box">
                    <label>UCID Password:</label><input type="password" placeholder="ucid_pass" name="ucid_pass" id="input-box">
                    <label>Username:</label><input type="text" placeholder="user_name" name="user_name" id="input-box">
                    <label>Create Password:</label><input type="password" placeholder="user_pass" name="user_pass" id="input-box">
                    <label>Email:</label><input type="email" placeholder="email" name="email" id="input-box"><br><br>
                    <input type="submit" value="Submit">
                </div>
                <div class="right details">
                    <p>Save ucid and user_pass to use to authenticate future requests</p>
                </div>
        </form>
    
    <form id="form-create-account-no-njit" action="login/create-no-njit.php" method="post">
        <div class="form">
            <h3>Creating an account (No NJIT Check)</h3>
            <label>UCID:</label><input type="text" placeholder="ucid" name="ucid" id="input-box">
            <label>UCID Password:</label><input type="password" placeholder="ucid_pass" name="ucid_pass" id="input-box">
            <label>Username:</label><input type="text" placeholder="user_name" name="user_name" id="input-box">
            <label>Create Password:</label><input type="password" placeholder="user_pass" name="user_pass" id="input-box">
            <label>Email:</label><input type="email" placeholder="email" name="email" id="input-box"><br><br>
            <input type="submit" value="Submit">
        </div>
        <div class="right details">
            <p>Save ucid and user_pass to use to authenticate future requests</p>
        </div>
    </form>

    <form id="form-login-account" action="login/login.php" method="post">
        <div class="form">
            <h3>Login into account</h3>
            <label>UCID:</label><input type="text" placeholder="ucid" name="ucid" id="input-box">
            <label>Password:</label><input type="password" placeholder="pass" name="pass" id="input-box"><br><br>
            <input type="submit" value="Submit">
        </div>
        <div class="right details">
            <p>When logging in the server returns a profile object. If it is null redirect to the create a profile page else redirect to their own page.</p>
        </div>
    </form>

    <form id="form-create-profile" action="profile/create.php" method="post">
        <div class="form">
            <h3>Create a profile</h3>
            <label>UCID:</label><input type="text" placeholder="ucid" name="ucid" id="input-box">
            <label>First Name:</label><input type="text" placeholder="first_name" name="first_name" id="input-box">
            <label>Last Name:</label><input type="text" placeholder="last_name" name="last_name" id="input-box">

            <label for="textarea"> About </label>
            <textarea id="textarea" name="about" placeholder="about" rows="5" cols="30"></textarea>


            <label for="class-select"> Class Level</label>
            <select id="class-select" name="class_level">
                <option value="1">Freshman</option>
                <option value="2">Sophomore</option>
                <option value="3">Junior</option>
                <option value="4">Senior</option>
            </select>

            <label for="relationship-select"> Relationship Status </label>
            <select id="relationship-select" name="relationship">
                <option value="1">Single</option>
                <option value="2">Dating</option>
                <option value="3">Married</option>
                <option value="4">Complicated</option>
            </select>


            <label for="gender-select"> Gender </label>
            <select id="gender-select" name="gender">
                <option value="1">Male</option>
                <option value="2">Female</option>
                <option value="3">Other</option>
            </select> <br><br>

            <label>Profile Image: </label><input type="file" placeholder="file" name="file" id="input-box"><br>

            <input type="submit" value="Submit">
        </div>
        <div class="right details">
            <p>Save ucid and user_pass to use to authenticate future requests</p>
        </div>
    </form>

    <form id="form-update-profile" action="profile/update.php" method="post" >
        <div class="form">
            <h3>Update a profile</h3>
            <label>UCID:</label><input type="text" placeholder="ucid" name="ucid" id="input-box">
            <label>First Name:</label><input type="text" placeholder="first_name" name="first_name" id="input-box">
            <label>Last Name:</label><input type="text" placeholder="last_name" name="last_name" id="input-box">

            <label for="textarea"> About </label>
            <textarea id="textarea" name="about" placeholder="about" rows="5" cols="30"></textarea>


            <label for="class-select"> Class Level</label>
            <select id="class-select" name="class_level">
                <option value="1">Freshman</option>
                <option value="2">Sophomore</option>
                <option value="3">Junior</option>
                <option value="4">Senior</option>
            </select>

            <label for="relationship-select"> Relationship Status </label>
            <select id="relationship-select" name="relationship">
                <option value="1">Single</option>
                <option value="2">Dating</option>
                <option value="3">Married</option>
                <option value="4">Complicated</option>
            </select>


            <label for="gender-select"> Gender </label>
            <select id="gender-select" name="gender">
                <option value="1">Male</option>
                <option value="2">Female</option>
                <option value="3">Other</option>
            </select> <br><br>

            <label>Profile Image: </label><input type="file" placeholder="file" name="file" id="input-box"><br>

            <input type="submit" value="Submit">
        </div>
        <div class="right details">
            <p>Save ucid and user_pass to use to authenticate future requests</p>
        </div>
    </form>


    <form id="form-create-post" action="profile/post/create.php" method="post" >
        <div class="form">
            <h3>Create a post</h3>
            <label>Post to:</label><input type="text" placeholder="to_ucid" name="to_ucid" id="input-box">
            <label>From:</label><input type="text" placeholder="from_ucid" name="from_ucid" id="input-box">
            <label for="textarea"> About </label>
            <textarea id="textarea" name="text" placeholder="text" rows="5" cols="30"></textarea><br>

            <input type="submit" value="Submit">
        </div>
        <div class="right details">
            <p></p>
        </div>
    </form>

</div>
<div class="results-panel">
    <div class="results">
        <h3>Results</h3>
        <pre class="output">
        </pre>
    </div>
</div>
</body>
</html>