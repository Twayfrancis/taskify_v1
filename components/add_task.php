<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Taskify - Add Task</title>
        <link rel="stylesheet" href="stylesheet/style.css">
    </head>
    <body>
        <?php
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
        ?>
        <header>
            <h1>Add New Task</h1>
            <nav>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </nav>
        </header>
	<main>
            <?php
                session_start();
                include_once('db_config.php');
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
                if(isset($_SESSION['user_id'])) {
                    $user_id = $_SESSION['user_id'];
                 }
            ?>
            <form class="add-task-form" action="logic/process_add_task.php" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" placeholder="Task Title" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" placeholder="Task Description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="priority">Priority</label>
                    <select id="priority" name="priority" required>
                        <option value="Low">Low</option>
                        <option value="Medium">Medium</option>
                        <option value="High">High</option>
                    </select>
		</div>
                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
		<button type="submit" class="cta-button">Save Task</button>
            </form>
        </main>
        <script src="script.js"></script>
    </body>
</html>

