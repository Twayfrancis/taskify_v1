<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Taskify - Sign Up</title>
        <link rel="stylesheet" href="../stylesheet/style.css">
    </head>
    <body>
        <header>
	    <h1>Sign Up for Taskify</h1>
            <p>Streamlined Tak Management</p>
        </header>
        <main>
            <form class="signup-form" action="../logic/process_signup.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your unique password" required>
                </div>
		<button type="submit" class="cta-button">Sign Up</button>
                <a href="about.php" class="cta-button">Learn More</a>
	    </form>
            <p>Already have an account? <a href="login.php">Log in here</a>.</p>
        </main>
        <script src="script.js"></script>
    </body>
</html>

