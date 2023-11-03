<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Taskify - Log In</title>
        <link rel="stylesheet" href="stylesheet/style.css">
    </head>
    <body>
        <header>
            <h1>Log In to Taskify</h1>
        </header>
        <main>
            <form class="login-form" action="process_login.php" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="cta-button">Log In</button>
            </form>
            <p>Don't have an account yet? <a href="signup.php">Sign up here</a>.</p>
        </main>
        <script src="script.js"></script>
    </body>
</html>

