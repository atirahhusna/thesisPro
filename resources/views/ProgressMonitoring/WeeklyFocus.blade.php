<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff page</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    ::after,
    ::before {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }


    a {
        text-decoration: none;
        color: black; /* Change text color to black */
    }

    li {
        list-style: none;
    }

    h1 {
        font-weight: 600;
        font-size: 1.5rem;
    }

    body {
        font-family: 'Poppins', sans-serif;
    }

    .wrapper {
        display: flex;
    }

    .main {
        min-height: 100vh;
        width: 100%;
        overflow: hidden;
        transition: all 0.35s ease-in-out;
        background-color: #fafbfe;
    }

    #sidebar {
        width: 70px;
        min-width: 70px;
        z-index: 1000;
        transition: all .25s ease-in-out;
        background-color:#658CC2;
        display: flex;
        flex-direction: column;
    }

    #sidebar.expand {
        width: 260px;
        min-width: 260px;
    }

    .toggle-btn {
        background-color: transparent;
        cursor: pointer;
        border: 0;
        padding: 1rem 1.5rem;
    }

    .toggle-btn i {
        font-size: 1.5rem;
        color: black; /* Change icon color to black */
    }

    .sidebar-logo {
        margin: auto 0;
    }

    .sidebar-logo a {
        color: black; /* Change text color to black */
        font-size: 1.15rem;
        font-weight: 600;
    }

    #sidebar:not(.expand) .sidebar-logo,
    #sidebar:not(.expand) a.sidebar-link span {
        display: none;
    }

    #footer{
  background-color: #ffffff;
  text-align:justify;
  padding-top:10px;
}

    .sidebar-nav {
        padding: 2rem 0;
        flex: 1 1 auto;
    }

    a.sidebar-link {
        padding: .625rem 1.625rem;
        color: black; /* Change text color to black */
        display: block;
        font-size: 0.9rem;
        white-space: nowrap;
        border-left: 3px solid transparent;
    }

    .sidebar-link i {
        font-size: 1.1rem;
        margin-right: .75rem;
        color: black; /* Change icon color to black */
    }

    a.sidebar-link:hover {
        background-color: rgba(255, 255, 255, .075);
        border-left: 3px solid #3b7ddd;
    }

    .sidebar-item {
        position: relative;
    }

    #sidebar:not(.expand) .sidebar-item .sidebar-dropdown {
        position: absolute;
        top: 0;
        left: 70px;
        background-color: #0e2238;
        padding: 0;
        min-width: 15rem;
        display: none;
    }

    #sidebar:not(.expand) .sidebar-item:hover .has-dropdown+.sidebar-dropdown {
        display: block;
        max-height: 15em;
        width: 100%;
        opacity: 1;
    }

    #sidebar.expand .sidebar-link[data-bs-toggle="collapse"]::after {
        border: solid;
        border-width: 0 .075rem .075rem 0;
        content: "";
        display: inline-block;
        padding: 2px;
        position: absolute;
        right: 1.5rem;
        top: 1.4rem;
        transform: rotate(-135deg);
        transition: all .2s ease-out;
    }


    #sidebar.expand .sidebar-link[data-bs-toggle="collapse"].collapsed::after {
        transform: rotate(45deg);
        transition: all .2s ease-out;
    }
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
<div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">ThesisPro</a>
                    
                </div>
            </div>
           
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="lni lni-protection"></i>
                        <span>Profile</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">My Profile</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Mentor profile</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Platinum Profile</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Publication</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#register" aria-expanded="false" aria-controls="register">
                        <i class="lni lni-layout"></i>
                        <span>Expert information</span>
                    </a>
                    <ul id="register" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">New Registration</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">View Registration</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
        data-bs-target="#progress" aria-expanded="false" aria-controls="progress">
        <i class="lni lni-layout"></i>
        <span>Progress Monitoring</span>
    </a>
    <ul id="progress" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">Weekly Focus</a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">Monthly Review</a>
        </li>
        <!-- Add more dropdown options as needed -->
    </ul>
</li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main p-3">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="{{ URL('images/logo.jpg') }}" alt="Logo" width="80" height="80" class="d-inline-block align-text-top">
                        </a>
                    </div>
                </nav>
                <a class="navbar-brand" href="#">Welcome To ThesisPro !</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        
                    </ul>
                </div>
            </nav>
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
    <table class="center" style="margin: 0 auto;">
  <tr>
    <td class="column" style="text-align: center;">
      <img src="{{ URL('images/logo.jpg') }}" alt="logo" width="150" height="150">
    </td>
    <td style="width: 800px; text-align: justify;">
      <p>THESISPRO is a premier academic platform designed to support postgraduate students in managing and showcasing their scholarly work. Our system offers a comprehensive suite of tools for editing, publishing, and sharing research and publications within expert domains. By facilitating seamless interactions among students, mentors, and staff, THESISPRO aims to enhance academic collaboration and promote excellence in research and education.</p>
    </td>
  </tr>
</table>
<hr>
<p style="text-align:center;">Copyright &copy; 2024 THESISPRO Corporation. All Rights Reserved.</p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script>
        const hamBurger = document.querySelector(".toggle-btn");

        hamBurger.addEventListener("click", function () {
            document.querySelector("#sidebar").classList.toggle("expand");
        });
    </script>
</body>
</html>
