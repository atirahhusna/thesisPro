<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management</title>
    <style>
        /* Basic styling for the task sections */
        .task-section {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }
        .task-title {
            font-weight: bold;
        }
        .timer {
            color: #007bff;
        }
        .add-button {
            background-color: orange;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 20px; /* Rounded ends */
        }
        /* Additional styling for buttons */
        .button-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .button {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 20px; /* Rounded ends */
        }
        .button.active {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
    <div class="button-group">
        <div class="button all active">All</div>
        <div class="button focus">Focus</div>
        <div class="button admin">Admin</div>
        <div class="button social">Social</div>
        <div class="button recovery">Recovery</div>
    </div>
    <div class="task-section">
        <div class="task-title">Previous</div>
        <div class="task">Revision Chapter 3 OS</div>
        <div class="timer">03:23 - 3:30</div>
    </div>
    <div class="task-section">
        <div class="task-title">Future</div>
        <div class="task">Reduce shopping time</div>
        <div class="timer">04:12 - 4:19</div>
    </div>
    <button class="add-button">+</button>
    <script>
        // JavaScript code for handling button clicks and task editing
        const buttons = document.querySelectorAll('.button');
        const futureTask = document.querySelector('.task-section.future .task');
        const addButton = document.querySelector('.add-button');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                buttons.forEach(b => b.classList.remove('active'));
                button.classList.add('active');
                // Implement logic to filter tasks based on the selected button (e.g., show only "Focus" tasks)
                console.log(`Showing ${button.textContent} tasks`);
            });
        });

        futureTask.addEventListener('click', () => {
            // Implement logic to allow editing of future task content
            console.log('Editing future task content');
        });

        addButton.addEventListener('click', () => {
            // Implement logic to add a new task
            console.log('New task added!');
        });
    </script>
</body>
</html>
