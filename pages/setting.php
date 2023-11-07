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
        <input type="password" id="delete_account_password" name="delete_account_password">
        <input type="submit" name="delete_account" value="Delete Account">

        <!-- Password Reset -->
        <h2>Password Reset</h2>
        <label for="current_password">Current Password:</label>
        <input type="password" id="current_password" name="current_password">
        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password">
        <label for="confirm_password">Confirm New Password:</label>
        <input type="password" id="confirm_password" name="confirm_password">
        <input type="submit" name="reset_password" value="Reset Password">
    </form>
</body>
</html>

