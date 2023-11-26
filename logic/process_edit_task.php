<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once('../db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $priority = mysqli_real_escape_string($conn, $_POST["priority"]);
    $due_date = mysqli_real_escape_string($conn, $_POST["due_date"]);
    $task_id = mysqli_real_escape_string($conn, $_POST["task_id"]);

    $stmt = $conn->prepare("UPDATE Tasks
                            SET title = ?, description = ?, priority = ?, due_date = ?  WHERE task_id = ?");
    $stmt->bind_param("ssssi", $title, $description, $priority, $due_date,  $task_id);
   
    if ($stmt->execute()) {
        // Task updated successfully
    } else {
        // Error updating task
        echo "Error: " . $conn->error;
    }

    $stmt->close();
    $conn->close();

    // Redirect back to the dashboard or a confirmation page
    header("Location: ../pages/dashboard.php");
    exit();
}

?>
