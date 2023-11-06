<?php
include_once('../db_config.php');

session_start();

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
        $task_id = mysqli_real_escape_string($conn, $_GET["id"]);

        // Retrieve the task details from the database
        $sql = "SELECT * FROM Tasks WHERE task_id = '$task_id' AND user_id = '$user_id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Display the task details
            echo "<h2>{$row['title']}</h2>";
            echo "<p><strong>Description:</strong> {$row['description']}</p>";
            echo "<p><strong>Priority:</strong> {$row['priority']}</p>";
        } else {
            // Handle case where task does not exist or user does not have permission
            echo "Task not found.";
        }
    }
} else {
    // User is not logged in: Redirect to the login page or display an error message
    header("Location: ../pages/login.php");
    exit();
}
?>

