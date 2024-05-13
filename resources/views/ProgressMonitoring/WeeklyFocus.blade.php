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
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-left: 150px; margin-right: 300px;" ><img src="{{ URL('images/logo.jpg') }}" alt="logo" width="80" height="80"></nav>
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Register
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="http://127.0.0.1:8000/Login">New Register</a></li>
            <li><a class="dropdown-item" href="#">View registered platinum</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profile
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">My Profile</a></li>
            <li><a class="dropdown-item" href="#">Mentor Profile</a></li>
            <li><a class="dropdown-item" href="#">Platinum Profile</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Report
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Cluster Report</a></li>
            <li><a class="dropdown-item" href="#">Publication report</a></li>
            <li><a class="dropdown-item" href="#">Expert report</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Progress Monitoring
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Weekly Focus</a></li>
            <li><a class="dropdown-item" href="#">Draft Thesis Performance</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
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
