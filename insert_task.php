<?php
$title = "Task Title";
$description = "Task Description";
$priority = "High";
$completed = 0;
$user_id = 1; // Assuming a user with ID 1 exists

$sql = "INSERT INTO Tasks (user_id, title, description, priority, completed)
        VALUES ('$user_id', '$title', '$description', '$priority', '$completed')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
