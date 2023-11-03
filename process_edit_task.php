<?php
include_once('db_config.php');
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title = $_POST["title"];
    $description = $_POST["description"];
    $priority = $_POST["priority"];
     $task_id = $_POST["task_id"];

    // Perform necessary actions (e.g., update task details in database)
    $sql = "UPDATE tasks 
            SET title = '$title', description = '$description', priority = '$priority'
            WHERE task_id = $task_id";
    
    if (mysqli_query($conn, $sql)) {
        // Task updated successfully
    } else {
        // Error updating task
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);

    // Redirect back to the dashboard or a confirmation page
    header("Location: dashboard.php");
    exit();
}
?>
