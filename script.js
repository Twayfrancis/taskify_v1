// Add Task Page
const addTaskForm = document.querySelector('.add-task-form');

addTaskForm.addEventListener('submit', (e) => {
    e.preventDefault();

    // Get form values
    const title = document.getElementById('title').value;
    const description = document.getElementById('description').value;
    const priority = document.getElementById('priority').value;

    // Send data to backend
    fetch('process_add_task.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            title: title,
            description: description,
            priority: priority,
        }),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Task added successfully!');
            // Redirect to Dashboard (for demonstration)
            window.location.href = 'dashboard.php';
        } else {
            alert('Failed to add task. Please try again.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

