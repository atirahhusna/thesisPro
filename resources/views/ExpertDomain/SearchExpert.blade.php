@extends('Header/platinum')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Expert</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');


        .search-container {
            margin: auto;
            width: 80%;
            padding-top: 100px;
            text-align: center;
            
        }

        .search-input {
            width: 500px;
            padding: 5px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 10px;
            outline: none;
        }

        .search-button {
            width: 100px;
            padding: 5px;
            background-color: #3b7ddd;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            outline: none;
        }

        .search-button:hover {
            background-color: #45a049;
        }

        .search-text {
        max-width: 900px; /* Adjust the width as needed */
        margin: 0 auto; /* Centers the container horizontally */
        }

        .search-text h4{
        font-size: 20px;
        margin-bottom: 20px;
        }


       .search-text p {
        font-size: 13px; 
        font-weight: normal; 
        }

        .filter-container {
            margin-bottom: 20px;
        }

        .filter-select {
            width: 150px; /* Adjusted width */
            padding: 5px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin: 0 auto;
            outline: none;
            display: block;
        }

        .search-container .search-input {
            width: 300px; /* Adjusted width */
            padding: 6px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 10px;
            outline: none;
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
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                                data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                My Profile
                            </a>
                            <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Other Staff Profile</a>
                                </li>
                                
                            </ul>
                        </li>
                    </ul>

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
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Publication</span>
                    </a>
                </li>
               
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="lni lni-layout"></i>
                        <span>Registeration</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                                data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                registeration section
                            </a>
                            <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">New registeration</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link"> View registeration</a>
                                </li>
                            </ul>
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
                        <a href="{{ route('SearchExpert') }}" class="sidebar-link">Search Expert</a>
                        </li>
                        <li class="sidebar-item">
                        <a href="{{ route('ViewExpert') }}" class="sidebar-link">View Expert</a>
                        </li>
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
                    <div class="container-fluid"></div>
                </nav>

                <div class="search-container">
                    <div class="search-text">
                        <h4><b>Discover Expertise<b></h4>
                        <p class="search-text">Explore a Diverse Range of Expertise and Connect with 
                        Knowledgeable Professionals to Find the Right Support for Your Needs</p><br>
                    </div>

                    <div class="filter-container">
                        <label for="filter">Filter</label>
                        <select id="filter" wire:model="nyFilter" class="filter-select">
                            <option value="">No Selected</option>
                            @foreach ($experts as $expert)
                                <option value="{{ $expert->e_ID }}">{{ $expert->e_Expertise}}</option>
                            @endforeach
                        </select>
                    </div>

                    <form action="{{url('SearchExpert')}}" method="GET">
                        <input type="text" name="query" class="search-input" placeholder="Search...">
                        <button type="submit" class="search-button">Search</button>
                    </form>
                </div>

            </nav>


            @if(isset($experts))
                <div class="container mt-5">
                    <h4>Search Results for "{{ $query }}"</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Expertise</th>
                                <th>Title Research</th>
                                <th>Paper</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($experts as $expert)
                                <tr>
                                    <td>{{ $expert->e_Name }}</td>
                                    <td>{{ $expert->e_Expertise }}</td>
                                    <td>{{ $expert->e_TitleResearch }}</td>
                                    <td>{{ $expert->e_Paper }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7">No experts found matching your search criteria.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            @endif
      
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
</body>
</html>