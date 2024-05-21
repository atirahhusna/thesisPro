<!-- Existing content -->
@extends('Header/crmp')
@section('content')
<hr>
<link rel="stylesheet" href="{{ asset('ProgressMonitoring/WeeklyFocus.css') }}"/>

<!-- SEARCH FORM -->
<div class="pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
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
                
                <!-- TOMBOL TAMBAH DATA -->
                <h5>PREVIOUS</h5>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">TASK</th>
                            <th class="col-md-4">Category</th>
                            <th class="col-md-2">DATE</th>
                            <th class="col-md-2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1001</td>
                            <td>Ani</td>
                            <td>Ilmu Komputer</td>
                            <td>
                                <a href='' class="btn btn-warning btn-sm">Edit</a>
                                <a href='' class="btn btn-danger btn-sm">Del</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
               
          </div>
          <!-- AKHIR DATA -->
          <div class="my-3 p-3 bg-body rounded shadow-sm">
                
                <!-- TOMBOL TAMBAH DATA -->
                <h5>FUTURE</h5>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">TASK</th>
                            <th class="col-md-4">Category</th>
                            <th class="col-md-2">DATE</th>
                            <th class="col-md-2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1001</td>
                            <td>Ani</td>
                            <td>Ilmu Komputer</td>
                            <td>
                                <a href='' class="btn btn-warning btn-sm">Edit</a>
                                <a href='' class="btn btn-danger btn-sm">Del</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="pb-3">
                    <center>
                  <button onclick="document.getElementById('loginModal').style.display='block'" style="width:auto;" class="btn btn-primary">+</button>
                  </center>
          </div>

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