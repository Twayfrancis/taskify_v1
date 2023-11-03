<?php
// start session
session_start();
include_once('db_config.php');
// check if the user is logged in
if(isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    // check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title = $_POST["title"];
    $description = $_POST["description"];
    $priority = $_POST["priority"];

    // Perform necessary actions (e.g., add task to database)
    //$user_id = $_SESSION['user_id']; // Assuming a user with ID 1 exists, replace with actual user ID
$sql = "INSERT INTO Tasks (user_id, title, description, priority, completed)
        VALUES ('$user_id', '$title', '$description', '$priority', '0')";

if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
} else {
     echo "Error: " . $sql . "<br>" . $conn->error;
}

    // Redirect back to the dashboard or a confirmation page
    header("Location: dashboard.php");
    exit();
}
?>
