<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlatinumPage</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- Add this in your header section -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Add this before the closing body tag -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
  
        ::after,
        ::before {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .profile-view {
    width: 50%;
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px; /* Add margin to the bottom */
}

    
        a {
            text-decoration: none;
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
            background-color: #2B7A78;
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
            color: #FFF;
        }

        .sidebar-logo {
            margin: auto 0;
        }

        .sidebar-logo a {
            color: #FFF;
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
            color: #FFF;
            display: block;
            font-size: 0.9rem;
            white-space: nowrap;
            border-left: 3px solid transparent;
        }

        .sidebar-link i {
            font-size: 1.1rem;
            margin-right: .75rem;
        }

        a.sidebar-link:hover {
            background-color: rgba(255, 255, 255, .075);
            border-left: 3px solid #3b7ddd;
        }

       
        body
      {<!-- class = . , id = # -->
        font-family: "Times New Roman", Times, serif;
      }

        ul.navigation{ 
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #fffff;
        }
        
        li.navigation {
        float:left;
        }
        
        li a.navigation {
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }
        
        li a:hover{
          text-decoration: underline;
          color: #054bb4;
          
        }

        li.button button {
        background-color: #054BB4;
        border:none;
        color: white;
        margin-top:15px;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        cursor: pointer;
        font-weight: bold;
        }

        li.button.button1 button{border-radius:20px;}

        li.button.button1 button:hover {
        background-color: black; /* change background color on hover */
        text:white;
        }

      input[type=text], input[type=date], input[type=search],select{
          margin-bottom: 20px;
          width: 300px;
          height: 50px;
          padding: 12px 20px;
          box-sizing: border-box;
          border: 2px solid #ccc;
          border-radius: 4px;
          background-color: #f8f8f8;
          font-size: 16px;
          resize: none;
          
        }

        #upload{
          padding-left: 100px;
          background-color: #ffffff;
          width: 300px;
          height: 300px;
          border: 2px solid #17252A;
          padding: 50px;
          margin: 20px;
          text-align:center;
          padding-top:80px;
        }

        table.center {
          margin-left: auto; 
          margin-right: auto;
        }

        textarea {
          width: 300px;
          height: 150px;
          padding: 12px 20px;
          box-sizing: border-box;
          border: 2px solid #ccc;
          border-radius: 4px;
          background-color: #f8f8f8;
          font-size: 16px;
          resize: none;
        }

        .column{
            padding-right:100px;
        }

        #add p ,#edit p, #view p{
            color: white;
        }

        #view p{
            font-size:20px;
        }


        input[type=submit], input[type=reset], input[type=save]{
        border-style: double;
        color: #ffffff;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        cursor: pointer;
        background-color: #007BFF;
        margin-top: 20px;
      }

      .button-container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .button-container button {
        margin: 0 10px;
        padding: 10px 20px;
        font-size: 16px;
        background-color:  #2B7A78;
        color: white;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .button-container button:hover {
        background-color: black;
    }


    .button-container-delete-edit-view {
        display: flex;
        justify-content: center;
        margin-top: 10px;
        margin-bottom: 10px;
        font-size: 18px;
    }

    .button-container-delete-edit-view button {
        margin: 0 10px;
        padding: 5px 15px;
        font-size: 14px;
        background-color:  #17252A;
        color: white;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }


    .button-container-delete-edit-view button[type="delete"]:hover {
    background-color: #FF0000;
    }

    .button-container-delete-edit-view button[type="edit"]:hover {
        background-color: #2B7A78;
    }

    .button-container-delete-edit-view button[type="view"]:hover {
        background-color: #0000FF;
    }

    #add{
      background-color: #3AAFA9;
      padding-top:40px;
      padding-bottom:40px;
    }

    #viewSearchDelete{
      padding-top:40px;
      padding-bottom:40px;
      background-color: #ffffff;
    }

    #list{
          padding-left: 100px;
          background-color: #ffffff;
          width: 1400px;
          height: auto; /* Set height to auto to adjust automatically */
          border: 2px solid #17252A;
          padding: 20px;
          margin: 20px;
          text-align:center;
          padding-top:10px;
        }

    #edit, #view{
      padding-top:40px;
      padding-bottom:40px;
      background-color: #3AAFA9;
      color:white;
      
    }

        #viewSearchDelete h3{
        padding-left:30px;
        color: #17252A;
        }

        #footer{
        background-color: #ffffff;
        text-align:justify;
        padding-top:10px;
        }

        h3{
        padding-left:30px;
        color:white;
    }

    #viewForm{
        padding-top:40px;
        padding-left:70px;
    }

    hr{
      border: 2px solid black;
      width:1100px;
      margin-left: auto; 
      margin-right: auto;

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

        
        .even-row-publication {
        background-color: #d1ffff; /* Blue */
        }

        .odd-row-publication {
            background-color: white; /* Pink */
        }
        
    </style>
</head>
<body>
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
                        <a href="{{ route('platinumProfile') }}" class="sidebar-link">My Profile</a>

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
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#publication" aria-expanded="false" aria-controls="publication">
                        <i class="lni lni-agenda"></i>
                        <span>Publication</span>
                    </a>
                    <ul id="publication" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('publication.publicationManager') }}" class="sidebar-link">My Publication</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('publication.publicationViewer') }}" class="sidebar-link">General Publications</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#expertDropdown" aria-expanded="false" aria-controls="expertDropdown">
                        <i class="lni lni-popup"></i>
                        <span>Expert Information</span>
                    </a>
                    <ul id="expertDropdown" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                        <a href=" {{ route('SearchExpert') }} " class="sidebar-link">Search Expert</a>
                        </li>
                        <li class="sidebar-item">
                        <a href=" {{ route('ViewExpert') }}" class="sidebar-link">Add Expert</a>
                        </li>
                       
                    </ul>
                </li>
                <!-- New Progress Monitoring Menu -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#progressMonitoring" aria-expanded="false" aria-controls="progressMonitoring">
                        <i class="lni lni-bar-chart"></i>
                        <span>Progress Monitoring</span>
                    </a>
                    <ul id="progressMonitoring" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">CRMP Profile</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('WeeklyFocus.index') }}" class="sidebar-link">Weekly Focus</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('DraftThesis.index') }}" class="sidebar-link">Draft Thesis</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="sidebar-footer">
            <a href="{{ route('logout') }}" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="{{ URL('images/logo.jpg') }}" alt="Logo" width="80" height="80" class="d-inline-block align-text-top">
                        </a>
                    </div>
                </nav>
                <a class="navbar-brand" style="font-size:30px;" href="#">Welcome to ThesisPro, {{ session('platinum')['r_name'] }}!</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        
                    </ul>
                </div>
            </nav>

                @yield('content')

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
              <center>
              <hr>
            </center>
              <p style="text-align:center;">Copyright &copy; 2024 THESISPRO Corporation. All Rights Reserved.</p>
                      </div>
                  </div>
                  
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
                  <script>
                    // JavaScript to add alternating row colors
                    const rows = document.querySelectorAll('#publication-table tr:nth-child(even)');
                    rows.forEach(row => {
                        row.classList.add('even-row-publication');
                    });

                    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
                    var dropdown = document.getElementsByClassName("dropdown-btn");
                    var i;

                    for (i = 0; i < dropdown.length; i++) {
                    dropdown[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var dropdownContent = this.nextElementSibling;
                        if (dropdownContent.style.display === "block") {
                        dropdownContent.style.display = "none";
                        } else {
                        dropdownContent.style.display = "block";
                        }
                    });
                    }
                </script>
                  </body>

                  </html>
              