<!-- Existing content -->
@extends('Header/crmp')
@section('content')
<hr>
<link rel="stylesheet" href="{{ asset('ProgressMonitoring/WeeklyFocus.css') }}"/>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
<!-- SEARCH FORM -->
<div class="pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Enter keyword" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Seacrh</button>
                  </form>
</div>
<div class="button-group">
    <nav class="hehe">
        <ul>
            <li><a href="#" onclick="filterTasks('All')">All</a></li>
            <li><a href="#" onclick="filterTasks('Focus')">Focus</a></li>
            <li><a href="#" onclick="filterTasks('Admin')">Admin</a></li>
            <li><a href="#" onclick="filterTasks('Social')">Social</a></li>
            <li><a href="#" onclick="filterTasks('Recovery')">Recovery</a></li>
        </ul>
    </nav>
</div>

 <!-- START DATA -->
 <div class="my-3 p-3 bg-body rounded shadow-sm">
                
            
          <!-- AKHIR DATA -->
          <div class="my-3 p-3 bg-body rounded shadow-sm">
                
                <!-- TOMBOL TAMBAH DATA -->

          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">Task</th>
                            <th class="col-md-4">Category</th>
                            <th class="col-md-2">Range Date</th>
                            <th class="col-md-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Focus on SDW Project</td>
                            <td>Focus</td>
                            <td>20-30 MAY 2024</td>
                            <td>
                                <a href='' class="btn btn-warning btn-sm">Comment</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Spend less time on social media</td>
                            <td>Social</td>
                            <td>30-20 JUN 2024</td>
                            <td>
                                <button onclick="document.getElementById('loginModal').style.display='block'" style="width:auto;" class="btn btn-warning btn-sm">Comment</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

<!-- Add button to trigger popup -->
<div id="loginModal" class="modal">
    <form class="modal-content animate" action='{{ url('WeeklyController') }}' method="post">
        @csrf 
        <div class="imgcontainer">
            <span onclick="document.getElementById('loginModal').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <div class="container">
            <label for="description"><b>Task Description</b></label>
            <textarea id="description" placeholder="Enter Description" name="description" required></textarea>
            <br>

            <label for="category"><b>Category:</b></label>
            <select name="category" id="category" class="input-field">
                <option value="Focus">Focus</option>
                <option value="Admin">Admin</option>
                <option value="Social">Social</option>
                <option value="Recovery">Recovery</option>
            </select>
            <br>
            <label for="date"><b>Date:</b></label>
            <input type="date" name="date" id="date" class="input-field" required>
            <br>
            
            <center>
                <button type="submit">Submit</button>
            </center>
        </div>
    </form>
</div>
<hr>

<!-- Centered table -->
<table class="center" style="margin: 0 auto;"></table>
<!-- End of content -->
@endsection