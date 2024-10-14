<?php
session_start();

function userIsLoggedIn() {
    // Check if the user is logged in
    return isset($_SESSION['user_email']);
}
?>
