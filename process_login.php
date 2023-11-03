<?php
include_once('db_config.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Start the session
session_start();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform necessary actions (e.g., verify user credentials)
    if (empty($email) || empty($password)) {
        echo "All fields are required.";
        exit();
    }

    // Verify user credentials
    $stmt = $conn->prepare("SELECT user_id, password_hash FROM Users WHERE email = ?");
    if($stmt === false) {
        echo "Error: " . $conn->error;
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();
    if($stmt->errno) {
	        echo "SQL Error: " . $stmt->error;
    }
    $stmt->bind_result($user_id, $hashed_password);
    $stmt->fetch();
    $stmt->close();

    if (password_verify($password, $hashed_password)) {
        // Passwords match, user is authenticated
        $_SESSION['user_id'] = $user_id; // Store user ID in session
        header("Location: dashboard.php"); // Redirect to dashboard
        exit();
    } else {
        // Incorrect username or password
        echo "Invalid username or password.";
    }
} else {
    echo "Invalid request method.";
}
?>

