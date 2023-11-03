<!DOCTYPE html> 
<html lang="en">
<head>      
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Taskify - Dashboard</title>
    <link rel="stylesheet" href="stylesheet/style.css">
</head>
<body>
    <header>
        <?php
            // Start the session and check if the user is logged in
            session_start();
            if(isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];

                // Include the database configuration
                include_once('db_config.php');

                // Retrieve the username from the database
                $stmt = $conn->prepare("SELECT username FROM Users WHERE user_id = ?");
                $stmt->bind_param("i", $user_id);
                $stmt->execute();
                $stmt->bind_result($username);
                $stmt->fetch();
                $stmt->close();
                //$conn->close();

                // Display the welcome message with the username
                echo "<h1>Welcome, $username</h1>";
            } else {
                // Redirect to a login page or display a message for unauthorized access
                header("Location: login.php");
                exit();
            }
        ?>

        <nav>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="setting.php">Settings</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Your Tasks</h2>
        <ul class="task-list">
            <!-- Task items will be dynamically generated here-->
                <?php
	        error_reporting(E_ALL);
	        ini_set('display_errors', 1);
                // Include the database configuration
                include_once('db_config.php');
                // Fetch tasks for the logged-in user
                $stmt = $conn->prepare("SELECT * FROM Tasks WHERE user_id = ?");      
                $stmt->bind_param("i", $user_id);
                $stmt->execute();
                $result = $stmt->get_result();

                // Check if there are any tasks
                if ($result->num_rows > 0) {
                    // Output tasks in HTML
                    while ($row = $result->fetch_assoc()) {
                        echo "<li>{$row['title']} - <a href='edit_task.php?id={$row['task_id']}'>Edit</a></li>";
                    }
                } else {
                    echo "<li>No tasks found.</li>";
		}

                $stmt->close();
                //$conn->close();
            ?>
	</ul> 
        <a href="add_task.php" class="cta-button">Add Task</a> 
    </main>
    <script src="script.js"></script>
</body>
</html>

