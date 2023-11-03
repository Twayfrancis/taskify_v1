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
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Log Out</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <form class="edit-task-form" action="process_edit_task.php" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" value="[Task Title]" required>
                    <input type="hidden" name="task_id" value="?"> <!-- Assuming the task ID you want to edit is 1 -->
                    <input type="submit" value="Save Changes">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" required>[Task Description]</textarea>
                </div>
                <div class="form-group">
                    <label for="priority">Priority</label>
                    <select id="priority" name="priority" required>
                        <option value="Low">Low</option>
                        <option value="Medium">Medium</option>
                        <option value="High">High</option>
                    </select>
                </div>
                <button type="submit" class="cta-button">Save Changes</button>
            </form>
        </main>
        <script src="script.js"></script>
    </body>
</html>

