<?php
/**
 * Created by PhpStorm.
 * User: abpxninja
 * Date: 3/14/2017
 * Time: 9:42 PM
 */
    require_once('startsession.php');
    require_once('header.php');
    require_once ('connectVars.php');
    require_once('navbar.php');
?>

<body>
<h3>Chapayom - Sign Up</h3>

<?php
/**
 * Created by PhpStorm.
 * User: abpxninja
 * Date: 2/13/2017
 * Time: 9:12 PM
 */

    // Connect to the database
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if(isset($_POST['submit'])) {

        // Grab the profile data from the POST
        $username = mysqli_real_escape_string($dbc, trim($_POST['username']));
        $password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
        $password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));

        if(!empty($username) && !empty($password1) && !empty($password2) && ($password1 == $password2)) {

            // Make sure someone isn't already registered using this username
            $query = "SELECT * FROM mismatch_user WHERE username = '$username'";

            $data = mysqli_query($dbc, $query);
            if(mysqli_num_rows($data) == 0) {

                // The username is unique, so insert the data into the database
                $query = "INSERT INTO mismatch_user (username, password, join_date) VALUES ('$username', SHA('$password1'), NOW())";

                mysqli_query($dbc, $query);

                // Confirm success with the user
                echo '<a>Your new account has been successfully created. You\'re now ready to <a href="login.php"> log in.</a></p>';

                mysqli_close($dbc);
                exit();
            }

            else {

                // An account already exists for this username, so display an error message
                echo '<p class="error">An account already exists for this username. Please use a different address.</p>';

                $username = "";

            }
        }

        else {

            echo '<p class="error">You must enter all of the sign-up data, including the desired password twice.</p>';
        }

    }

    mysqli_close($dbc);

?>

    <p>Please enter your username and desired password to sign up to Chapayom.</p>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <fieldset>
            <legend>Registration Info</legend>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php if (!empty($username))echo $username; ?>"/><br />

            <label for="password1">Password:</label>
            <input type="password" id="password1" name="password1" value="<?php if (!empty($password1))echo $password1; ?>"/><br />

            <label for="password2">Password:</label>
            <input type="password" id="password2" name="password2" value="<?php if (!empty($password2))echo $password2; ?>"/><br />

        </fieldset>
        <input type="submit" value="Sign Up" name="submit" />

    </form>
<?php
    require_once('footer.php');
?>