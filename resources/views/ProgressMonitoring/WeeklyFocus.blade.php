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
@endsection