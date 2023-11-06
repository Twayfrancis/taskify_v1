<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taskify - Home</title>
    <link rel="stylesheet" href="/stylesheet/style_home.css">
</head>
<body>
    <header>
        <h1>Welcome to Taskify</h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Pages</a>
                    <div class="dropdown-content">
                        <a href="pages/dashboard.php">Dashboard</a>
                        <a href="pages/contact.php">Contact</a>
                        <a href="pages/about.php">About</a>
                        <a href="pages/setting.php">Settings</a>
                        <a href="components/logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="features">
            <h2>Elevate Your Productivity</h2>
            <p>Taskify is a powerful task Management web Application designed to help individuals and small teams organize their work effortlessly. With intuitive features and a user-friendly interface, Taskify empowers you to stay focused on what matters most.</p>
        </section>
        <section class="key-features">
            <h2>Key Features</h2>
            <ul>
                <li>Effortless Task Creation</li>
                <li>Real-Time Updates</li>
                <li>Search and Filter</li>
                <li>Secure User Authentication</li>
            </ul>
        </section>
    </main>
    <script src="script.js"></script>
    <footer>
        <p>© Copyright <?php echo date('Y'); ?> Twayfrancis.</p>
    </footer>
</body>
</html>
