<?php

// Connect to your database (replace with your database connection code)
$servername = "localhost";
$username = "tway";
$password = "5479";
$dbname = "TaskifyDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST["delete_account"])) {
        // Process delete account action
        $password = $_POST["delete_account_password"];
        
        // Verify password and perform deletion if valid
        // ...
        
        // Redirect user after account deletion
        header("Location: index.php");
        exit();
    }

    if (isset($_POST["delete_task"])) {
        // Process delete task action
        $task_id = $_POST["task_id"];
        
        // Perform task deletion from database
        // ...
        
        // Redirect user after task deletion
        header("Location: settings.php");
        exit();
    }

    if (isset($_POST["mark_complete"])) {
        // Process mark task as complete action
        $task_id = $_POST["complete_task_id"];
        
        // Update task status in the database
        // ...
        
        // Redirect user after marking task as complete
        header("Location: settings.php");
        exit();
    }

    if (isset($_POST["save_changes"])) {
        // Process save changes action for automatic deletion setting
        $auto_delete = isset($_POST["auto_delete"]) ? 1 : 0;
        
        // Update automatic deletion setting in the database
        // ...
        
        // Redirect user after saving changes
        header("Location: settings.php");
        exit();
    }
}

// Close database connection
$conn->close();

?>
