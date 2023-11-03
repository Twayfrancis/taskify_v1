<?php
include_once('db_config.php');

// Start the session
session_start();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password        

    // Perform necessary actions (e.g., create user in database)
    if (empty($username) || empty($email) || empty($password)) {
        echo "All fields are required.";
        exit();
    }

    // Insert user data into database
    $sql = "INSERT INTO Users (username, email, password_hash) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        // Retrieve the user ID after sign up
        $user_id = mysqli_insert_id($conn);

        // Store the user ID in the session
        $_SESSION['user_id'] = $user_id;

        // Redirect to the dashboard or a confirmation page upon successful signup
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request method.";
}
?>

