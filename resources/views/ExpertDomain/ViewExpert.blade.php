@extends('Header/platinum')
@section('content')
@php
    $r_profile_id = session('r_profile_id'); // Retrieve r_profile_id from session or use 'default value' if it doesn't exist
@endphp
<style>
    .table {
        width: 100%;
    }

    h3 {
        color: black;
        margin-top: 10px;
        font-family: "Helvetica", sans-serif;
    }

    .table {
        width: 100%;
    }

    h3 {
        color: black;
        margin-top: 10px;
        font-family: "Helvetica", sans-serif;
    }

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
                            @foreach ($data as $expert)
                                <option value="{{ $expert->e_ID }}">{{ $expert->e_Expertise}}</option>
                            @endforeach
                        </select>
                    </div>

                    <form action="{{url('SearchExpert')}}" method="GET">
                        <input type="text" name="query" class="search-input" placeholder="Search..." required>
                        <button type="submit" class="search-button">Search</button>
                    </form>
                </div>

<title>Expert List</title>

<div class="container">
    <div class="row" style="margin:10px;">                    
        
            @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
        <div class="col-14">                    
            <div class="card">
                <div class="card-header">
                    <h3>Expert List</h3>
                    <div style="margin-right:10px">
                <a href="{{url('AddExpert')}}" style="float:right;" class="btn btn-primary">ADD EXPERT</a><br>
            </div><br>

                    <table class = "table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Expert Name</th>
                            <th>Expertise</th>
                            <th>Year</th>
                            <th>Type of Publications</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                            $i = 1;
                        @endphp
                        @foreach ($data as $expert)
                            @foreach ($data as $index => $publication)

                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$expert->e_Name}}</td>
                                <td>{{$expert->e_Expertise}}</td>
                                <td>{{ \Carbon\Carbon::parse($publication->publication_date)->format('Y') }}</td>
                                <td>{{ $publication->publication_types}}</td>
                                <td>
                                <a href="{{url('ExpertDetail/'.$expert->e_ID)}}" class="btn btn-primary">VIEW</a>
                                <a href="{{url('EditExpert/'.$expert->e_ID)}}" class="btn btn-primary">EDIT</a>
                                <a href="{{url('DeleteExpert/'.$expert->e_ID)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this expert?');">DELETE</a>

                                </td>

                            </tr>
                            @php 
                                $i++;
                            @endphp
                            @endforeach
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection 