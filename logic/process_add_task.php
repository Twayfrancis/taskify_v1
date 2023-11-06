<?php
include_once('../db_config.php');

// Start the session
session_start();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Retrieve from data
	$title = $_POST["title"];
	$description = $_POST["description"];
	$priority = $_POST["priority"];

	// Perform necessary actions (e.g, create task in database)
	if (empty($title) || empty($description) || empty($priority)) {
		echo "All fields are required.";
		exit();
	}
	$user_id = $_SESSION['user_id'];

	// Insert task data into database
	$sql = "INSERT INTO Tasks (user_id, title, description, priority, completed) VALUES ('$user_id', '$title', '$description', '$priority', '0')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";

	    // Redirect to the dashboard or a confirmation page upon successful signup
            header("Location: ../pages/dashboard.php");
            exit();
         } else {
             echo "Error: " . $sql . "<br>" . $conn->error;
         }

   // $conn->close();
} else {
    echo "Invalid request method.";
}
?>


