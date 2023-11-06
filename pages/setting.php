<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Taskify Settings</title>
    <link rel="stylesheet" href="../stylesheet/style.css">
</head>
<body>
    <header>
    <h1>Settings</h1>
    <nav>
	    <ul>
                <li><a href="../home.php">Home</a></li>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="setting.php">Settings</a></li>
                <li><a href="../components/logout.php">Log Out</a></li>
            </ul>
        </nav>
    </header>
    <h1>Taskify Settings</h1>

    <form action="../logic/process_setting.php" method="post">

        <!-- Delete Account -->
        <h2>Delete Account</h2>
        <label for="delete_account_password">Enter Password:</label>
        <input type="password" id="delete_account_password" name="delete_account_password"
>
        <input type="submit" name="delete_account" value="Delete Account">

        <!-- Delete Task -->
        <h2>Delete Task</h2>
        <label for="task_id">Select Task:</label>
        <select id="task_id" name="task_id" required>
            <!-- Populate this dropdown with tasks from the database -->
            <option value="1">Task 1</option>
            <option value="2">Task 2</option>
            <!-- Add more options as needed -->
        </select>
        <input type="submit" name="delete_task" value="Delete Task">

        <!-- Mark Task as Complete -->
        <h2>Mark Task as Complete</h2>
        <label for="complete_task_id">Select Task:</label>
        <select id="complete_task_id" name="complete_task_id" required>
            <!-- Populate this dropdown with tasks from the database -->
            <option value="1">Task 1</option>
            <option value="2">Task 2</option>
            <!-- Add more options as needed -->
        </select>
        <input type="submit" name="mark_complete" value="Mark as Complete">

        <!-- Automatically Delete Completed Tasks -->
        <h2>Automatically Delete Completed Tasks</h2>
        <label for="auto_delete">Enable:</label>
        <input type="checkbox" id="auto_delete" name="auto_delete" value="1">
        <br><br>

        <!-- Save Changes -->
        <input type="submit" name="save_changes" value="Save Changes">
    </form>
</body>
</html>

