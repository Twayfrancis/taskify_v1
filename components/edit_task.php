<?php
include_once('db_config.php');
session_start();

// Check if task_id is provided in the URL
if(isset($_GET['task_id']) && !empty($_GET['task_id'])) {
    $task_id = mysqli_real_escape_string($conn, $_GET['task_id']);

    // Fetch task details from the database
    $stmt = $conn->prepare("SELECT * FROM Tasks WHERE task_id = ?");
    $stmt->bind_param("i", $task_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
       // Handle case where task does not exist
       echo "Task not found.";
       exit();
    }
} else {
    // Handle case where task_id is not provided in the URL
    echo "Task ID not provided.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Taskify - Edit Task</title>
        <link rel="stylesheet" href="stylesheet/style.css">
    </head>
    <body>
        <header>
            <h1>Edit Task</h1>
            <nav>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <form class="edit-task-form" action="process_edit_task.php" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
		    <input type="text" id="title" name="title" value="<?php echo $row['title']; ?>" required>
		    <input type="hidden" name="task_id" value="<?php echo $row['task_id']; ?>"> <!-- Assuming the task ID you want to edit is 1 -->
		  
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
		    <textarea id="description" name="description" required><?php echo $row['description']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="priority">Priority</label>
                    <select id="priority" name="priority" required>
		    <option value="Low" <?php if ($row['priority'] == 'Low') echo 'selected'; ?>>Low</option>
		    <option value="Medium" <?php if ($row['priority'] == 'Medium') echo 'selected'; ?>>Medium</option>
		    <option value="High" <?php if ($row['priority'] == 'High') echo 'selected'; ?>>High</option>
                    </select>
                </div>
                <button type="submit" class="cta-button">Save Changes</button>
            </form>
        </main>
        <script src="script.js"></script>
    </body>
</html>

