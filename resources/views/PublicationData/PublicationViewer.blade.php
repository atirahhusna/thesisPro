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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

        .sidenav {
            height: 100%;
            width: 250px;
            z-index: 1;
            top: 0;
            left: 0;
            overflow-x: hidden;
            padding-top: 10px;
            }

            /* Style the sidenav links and the dropdown button */
            .sidenav a, .dropdown-btn {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 16px;
            color: black;
            display: block;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            outline: none;
            }


            /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
            .dropdown-container {
            display: none;
            padding-left: 8px;
            }

            /* Optional: Style the caret down icon */
            .fa-caret-down {
            float: right;
            padding-right: 8px;
            }

            /* Some media queries for responsiveness */
            @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
            }

            hr{   
            border: 1px solid #2B7A78;
            
            }


            table{
                margin-left:10px;
                margin-right:10px;
            }

            input[type=text]{
                margin-top: 20px;
                width: 100px;
                height: 30px;
                padding: 12px 20px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                background-color: #f8f8f8;
                font-size: 16px;
                resize: none;
                display: inline-block; /* Display horizontally */
                margin-right: 10px; /* Adjust spacing between input fields */
                
                }

        input[type=submit]{
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


    .button-container-view button {
        padding: 5px 15px;
        font-size: 14px;
        background-color:  #17252A;
        color: white;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }


    .button-container-view button[type="view"]:hover {
        background-color: #0000FF;
    }

    th{
        font-size: 18px;
    }

    #view{
      padding-top:40px;
      padding-bottom:40px;
      background-color: #3AAFA9;
      color:white;
      
    }

    .sidenav button{
        color:white;
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
                            <a href="#" class="sidebar-link">My Profile</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Mentor profile</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Staff Profile</a>
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
                        data-bs-target="#register" aria-expanded="false" aria-controls="register">
                        <i class="lni lni-layout"></i>
                        <span>Registration</span>
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
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Expert Information</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
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
                <a class="navbar-brand" style="font-size:30px;" href="#">Welcome To ThesisPro !</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        
                    </ul>
                </div>
            </nav>
            
            <div id="content">
            <div id ="view" >

            <table style="margin-bottom:50px;">

                <tr>

                    <!--<td class="column">
                        <div class="sidenav">
                            <hr>
                            <button class="dropdown-btn">Year 
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-container">
                                <input type="text" id="year" name="year" placeholder="2000">
                                <input type="text" id="year" name="year" placeholder="2000">
                            </div>
                            <hr>
                            <button class="dropdown-btn">Author 
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-container">
                                <input style="width:230px;" type="text" id="year" name="year" placeholder="Enter Author Name">
                                
                            </div>
                            <hr>
                            <button class="dropdown-btn">Institution 
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-container">
                                <input style="width:230px;" type="text" id="year" name="year" placeholder="Enter Institution">
                                
                            </div>
                            <hr>
                            <button class="dropdown-btn">Publication Title 
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-container">
                                <input style="width:230px;" type="text" id="year" name="year" placeholder="Enter Publication Title">
                                
                            </div>
                            <hr>
                            
                            <div class="button-container">
                                <button type="submit">Submit</button>
                              
                            </div>
                        </div>
                    </td>-->

                    <td style="width:1200px;padding-left:50px;" >
                        <div style="display: flex; align-items: center;">
                            <input style="width:600px;height:40px;" type="text" id="search" name="search">
                            <div class="button-container">
                                <button  style="height:40px;" type="submit">Search</button>
                            </div>
                        </div>

                        <div>
                            <table style="margin-top:20px;" >
                                <tr>
                                    <th style="width:850px">TITLE</th>
                                    <th style="width:150px">YEAR</th>
                                    <th style="width:100px">ACTION</th>
                                </tr>

                                @foreach ($data as $publication)
                                <tr>
                                    <td style="padding-top:20px;">
                                        {{ $publication->publication_title}}<br>
                                        {{ $publication->publication_authors}}<br>
                                        {{ $publication->publication_institution}}
        
                                    </td>

                                    <td>
                                        {{ $publication->publication_date}}
                                    </td>
                        
                                    <td>
                                        <div class="button-container-view">
                                            <a href="{{ url('publication/'.$publication->publication_ID.'/show') }}" method="GET" >
                                                <button type="view">View</button>
                                            </a>
                                        </div>             
                                    </td>
                                </tr>              
                                @endforeach
                            </table>
                        </div>


                                        
                    </td>

                </tr>



            </table>
        </div>
            </div>

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


