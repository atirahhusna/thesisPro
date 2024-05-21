<!-- Existing content -->
@extends('Header/crmp')
@section('content')
<hr>
<link rel="stylesheet" href="{{ asset('ProgressMonitoring/WeeklyFocus.css') }}"/>

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

<div class="task-title"><h4>Previous</h4></div>
<div id="previous-tasks" class="task-section">
    <h5>Kurangkan bermain permainan online</h5><span >FOCUS </span><span>21 MAY 2025</span>
</div>

<div class="task-title"><h4>Future</h4></div>
<div id="future-tasks" class="task-section">

</div>

<!-- Add button to trigger popup -->
<center>
    <button onclick="document.getElementById('loginModal').style.display='block'" style="width:auto;">+</button>
</center>
<hr>
<!-- Popup for adding new section -->

<div id="loginModal" class="modal">
    <form class="modal-content animate" action="Register.html" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('loginModal').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <div class="container">
            <label for="taskDescription"><b>Task Description</b></label>
            <textarea id="taskDescription" placeholder="Enter Description" name="taskDescription" required></textarea>
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

<!-- Centered table -->
<table class="center" style="margin: 0 auto;"></table>

<!-- End of content -->
@endsection