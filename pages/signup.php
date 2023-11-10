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
                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
                 $(document).ready(function () {
        	   $('#email').on('input', function () {
            		var allowedDomains = ['gmail.com', 'outlook.com', 'protonmail.com', 'yahoo.com'];
            		var enteredEmail = $(this).val().trim();
            		var enteredDomain = enteredEmail.split('@')[1];

            		if (enteredDomain && allowedDomains.indexOf(enteredDomain) === -1) {
                		$(this).get(0).setCustomValidity('Please enter a valid email from Gmail, Outlook, ProtonMail, or Yahoo.');
            		} else {
                	    $(this).get(0).setCustomValidity('');
            		}
        	   });
                });
               </script>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" title="Password must contain at least one uppercase letter, one lowercase letter, one number (6 characters minimum)" placeholder="Enter your unique password" minlength="6" required>
                </div>
		<button type="submit" class="cta-button">Sign Up</button>
                <a href="about.php" class="cta-button">Learn More</a>
	    </form>
            <p>Already have an account? <a href="login.php">Log in here</a>.</p>
        </main>
    </body>
</html>

