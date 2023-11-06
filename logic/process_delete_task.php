<?php
include_once('../db_config.php');

session_start();

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
        $task_id = mysqli_real_escape_string($conn, $_GET["id"]);

        // Delete the task from the database
        $sql = "DELETE FROM Tasks WHERE task_id = '$task_id' AND user_id = '$user_id'";

        if ($conn->query($sql) === TRUE) {
            // Redirect back to the dashboard after successful deletion
            header("Location: ../pages/dashboard.php");
            exit();
        } else {
            // Handle error (e.g., display an error message)
            echo "Error deleting record: " . $conn->error;
        }
    }
} else {
    // User is not logged in: Redirect to the login page or display an error message
    header("Location: ../pages/login.php");
    exit();
}
?>
