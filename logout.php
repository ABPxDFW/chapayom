<?php
/**
 * Created by PhpStorm.
 * User: abpxninja
 * Date: 3/14/2017
 * Time: 10:09 PM
 */
/**
 * Created by PhpStorm.
 * User: Bob
 * Date: 2/14/2017
 * Time: 8:04 PM
 */

    session_start();
    // If the user is logged in, delete the cookie to log them out.
    if(isset($_SESSION['user_id'])) {

        // Delete the session vars by clearing the $_SESSION array
        $_SESSION = array();

        // Delete the session cookie by setting its expiration to an hour ago (3600)
        if (isset($_COOKIE[session_name()])) {

            setcookie(session_name(), '', time() - 3600);

        }

        // Destroy the session
        session_destroy();
    }

    // Delete the user ID and username cookies by setting their expirations to an hour ago (3600)
    setcookie('user_id', '', time() - 3600);
    setcookie('username', '', time() - 3600);

    // Redirect to the home page

    $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';

    header('Location: ' . $home_url);