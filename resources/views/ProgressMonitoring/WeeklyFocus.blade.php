<!-- Existing content -->
@extends('MasterMenu/Platinum')
@section('content')

<link rel="stylesheet" href="{{ asset('ProgressMonitoring/WeeklyFocus.css') }}"/>

<div class="button-group">
    <nav class="hehe">
        <ul>
            <li><a href="">All</a></li>
            <li><a href="">Focus</a></li>
            <li><a href="">Admin</a></li>
            <li><a href="">Social</a></li>
            <li><a href="">Recovery</a></li>
        </ul>
    </nav>
</div>

<div class="task-title"><h4>Previous</h4></div>
<div class="task-section">
    <div class="task">
        Revision Chapter 3 OS
    </div>
    <div class="timer">03:23 - 3:30</div>
</div>

<div class="task-title"><h4>Future</h4></div>
<div class="task-section">
    <div class="task">Reduce shopping time</div>
    <div class="timer">04:12 - 4:19</div>
</div>

<!-- Add button to trigger popup -->
<button id="add-section-button" class="add-button">+</button>

<!-- Popup for adding new section -->
<div id="add-section-popup" class="popup">
    <div class="popup-content">
        <span class="close-button">&times;</span>
        <h2>Add New Section</h2>
        <form id="add-section-form">
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" required>

            <label for="category">Category:</label>
            <input type="text" id="category" name="category" required>

            <label for="start-date">Start Date:</label>
            <input type="date" id="start-date" name="start-date" required>

            <label for="end-date">End Date:</label>
            <input type="date" id="end-date" name="end-date" required>

            <button type="submit">Add</button>
        </form>
    </div>
</div>

<!-- Centered table -->
<table class="center" style="margin: 0 auto;"></table>

<!-- End of content -->
@endsection
