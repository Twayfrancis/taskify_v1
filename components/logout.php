<?php
session_start(); // Start the session

// Check if the user is logged in
if(isset($_SESSION['user_id'])) {
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect to a login page or any other desired page
    header("Location: ../pages/login.php");
    exit();
} else {
    // If the user is not logged in, redirect them to a login page
    header("Location: ../pages/login.php");
    exit();
}
?>

