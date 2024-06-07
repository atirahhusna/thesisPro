@extends('Header/mentor')
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

                    <form action="{{url('Search')}}" method="GET">
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

</body>
</html>
@endsection