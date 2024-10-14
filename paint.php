<?php
require_once('functions.php');

// Check if the user is logged in
if (userIsLoggedIn()) {
    // User is logged in, show the booking form
    include('booking-form.php');
} else {
    // User is not logged in, redirect to the login page
    header('Location: login.php');
    exit();
}
?>
