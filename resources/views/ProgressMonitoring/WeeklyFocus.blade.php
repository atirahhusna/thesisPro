@extends('Header/platinum')
@section('content')
<hr>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('ProgressMonitoring/WeeklyFocus.css') }}"/>
    <style>

    </style>
</head>
<body>
<!-- SEARCH FORM -->
<div class="pb-3">
    <form class="d-flex" action="{{ url('WeeklyFocus')}}" method="get" style="padding-left: 50px">
        <div style="display: flex; align-items: center;">
            <input style="width:1000px;height:40px;" type="search" id="search" name="keywords" value="{{Request::get('keywords') }}" placeholder="Enter keywords">
            <div class="button-container">
                <button style="height:40px; width:100px" type="submit">Search</button>
            </div>
        </div>
    </form>
</div>
<div class="button-group">
    <nav class="hehe" style="padding-top: 70px">
        <center>
            <ul>
                <li><a href="#" onclick="filterTasks('All')">All</a></li>
                <li><a href="#" onclick="filterTasks('Focus')">Focus</a></li>
                <li><a href="#" onclick="filterTasks('Admin')">Admin</a></li>
                <li><a href="#" onclick="filterTasks('Social')">Social</a></li>
                <li><a href="#" onclick="filterTasks('Recovery')">Recovery</a></li>
            </ul>
        </center>
    </nav>
</div>
@if (Session::has('success'))
<div class="pt-3">
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
</div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger">
        {{ Session::get('error') }}
    </div>
@endif

@if ($errors->any())
<div class="pt-3">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif

<!-- Week navigation -->
<center>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div>
            <a href=""><</a>
            <span>Week: </span>
            <a href="">></a>
        </div>
    </div>
    </center>


<center>
    @if ($data1->isEmpty() && $data2->isEmpty() && $data3->isEmpty() && $data4->isEmpty())
<div class="pb-3">
    <a href='{{ url('WeeklyAdd') }}' class="btn btn-primary">+</a>
</div>
@else
<div class="pb-3">
    <a href='{{ url('WeeklyAddItem') }}' class="btn btn-primary">Add New Task</a>
</div>
@endif
</center>

<div class="my-3 p-3 bg-body rounded shadow-sm">
    <table class="table table-striped">
        <b>FOCUS</b>
        </div>
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">Description</th>
                <th class="col-md-2">StartDate</th>
                <th class="col-md-2">EndDate</th>
                <th class="col-md-1">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php  $i=1;?>
            @foreach ($data1 as $item)
            <tr>
                <td>{{$i}}</td>
                <td>{{ $item->WF_Description}}</td>
                <td>{{ $item->WF_SDate}}</td>
                <td>{{ $item->WF_EDate}}</td>
                <td>
                    <a href='{{ url('WeeklyFocus/' . $item->WF_Description.'/viewP') }}' class="btn btn-info btn-sm">View</a>
                    @if ($data1->count() > 1)
                    <form action='{{ url('WeeklyFocus/'. $item->WF_Description) }}' method="POST" class='d-inline' onsubmit="return confirm('Want to delete the data?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Del</button>
                    </form>
                    @else
                    <button type="button" class="btn btn-danger btn-sm" onclick="showMessage()">Del</button>
                    @endif
                </td>
            </tr>
                <?php $i++; ?>
            @endforeach
            <?php  $p=2;?>
            @foreach ($data as $item)
            @if ($item->WF_Type == 'focus')
                <tr>
                    <td>{{$p}}</td>
                    <td>{{ $item->WF_Description}}</td>
                    <td>{{ $item->WF_SDate}}</td>
                    <td>{{ $item->WF_EDate}}</td>
                    <td>
                        <a href='{{ url('WeeklyFocus/' . $item->WF_Description.'/viewP') }}' class="btn btn-info btn-sm">View</a>
                        <form action='{{ url('WeeklyFocus/'. $item->WF_Description) }}' method="POST" class = 'd-inline' onsubmit="return confirm('Want to delete the data?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Del</button>
                        </form>
                    </td>
                </tr>
                <?php $i++; ?>
            @endif

            @endforeach
        </tbody>
    </table>
    <b>ADMIN</b>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">Description</th>
                <th class="col-md-2">StartDate</th>
                <th class="col-md-2">EndDate</th>
                <th class="col-md-1">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php  $i=1;?>
            @foreach ($data2 as $item)
            <tr>
            <td>{{$i}}</td>
            <td>{{ $item->WF_Description}}</td>
            <td>{{ $item->WF_SDate}}</td>
            <td>{{ $item->WF_EDate}}</td>
            <td>
                <a href='{{ url('WeeklyFocus/' . $item->WF_Description.'/viewP') }}' class="btn btn-info btn-sm">View</a>
                @if ($data2->count() > 1)
                <form action='{{ url('WeeklyFocus/'. $item->WF_Description) }}' method="POST" class='d-inline' onsubmit="return confirm('Want to delete the data?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Del</button>
                </form>
                @else
                <button type="button" class="btn btn-danger btn-sm" onclick="showMessage()">Del</button>
                @endif
            </td>
        </tr>
        <?php $i++; ?>
            @endforeach
            @foreach ($data as $item)
            @if ($item->WF_Type == 'admin')
            <?php  $i=2;?>
            <tr>
                <td>{{$i}}</td>
                <td>{{ $item->WF_Description}}</td>
                <td>{{ $item->WF_SDate}}</td>
                <td>{{ $item->WF_EDate}}</td>
                <td>
                    <a href='{{ url('WeeklyFocus/' . $item->WF_Description.'/viewP') }}' class="btn btn-info btn-sm">View</a>
                    <form action='{{ url('WeeklyFocus/'. $item->WF_Description) }}' method="POST" class='d-inline' onsubmit="return confirm('Want to delete the data?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Del</button>
                    </form>
                </td>
            </tr>
            <?php $i++; ?>
            @endif
        @endforeach
        </tbody>
    </table>
    <table class="table table-striped">
        <b>SOCIAL</b>
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">Description</th>
                <th class="col-md-2">StartDate</th>
                <th class="col-md-2">EndDate</th>
                <th class="col-md-1">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php  $i=1;?>
            @foreach ($data3 as $item)
            <tr>
            <td>{{$i}}</td>
            <td>{{ $item->WF_Description}}</td>
            <td>{{ $item->WF_SDate}}</td>
            <td>{{ $item->WF_EDate}}</td>
            <td>
                <a href='{{ url('WeeklyFocus/' . $item->WF_Description.'/viewP') }}' class="btn btn-info btn-sm">View</a>
                @if ($data3->count() > 1)
                <form action='{{ url('WeeklyFocus/'. $item->WF_Description) }}' method="POST" class='d-inline' onsubmit="return confirm('Want to delete the data?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Del</button>
                </form>
                @else
                <button type="button" class="btn btn-danger btn-sm" onclick="showMessage()">Del</button>
                @endif
            </td>
        </tr>
        <?php $i++; ?>
            @endforeach
            @foreach ($data as $item)
            @if ($item->WF_Type == 'social')
            <?php  $i=2;?>
            <tr>
                <td>{{$i}}</td>
                <td>{{ $item->WF_Description}}</td>
                <td>{{ $item->WF_SDate}}</td>
                <td>{{ $item->WF_EDate}}</td>
                <td>
                    <a href='{{ url('WeeklyFocus/' . $item->WF_Description.'/viewP') }}' class="btn btn-info btn-sm">View</a>
                    <form action='{{ url('WeeklyFocus/'. $item->WF_Description) }}' method="POST" class = 'd-inline' onsubmit="return confirm('Want to delete the data?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Del</button>
                    </form>
                </td>
            </tr>
            <?php $i++; ?>
            @endif
        @endforeach
        </tbody>
    </table>
    <table class="table table-striped">
        <thead>
            <b>RECOVERY</b>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">Description</th>
                <th class="col-md-2">StartDate</th>
                <th class="col-md-2">EndDate</th>
                <th class="col-md-1">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php  $i=1;?>
            @foreach ($data4 as $item)
            <tr>
            <td>{{$i}}</td>
            <td>{{ $item->WF_Description}}</td>
            <td>{{ $item->WF_SDate}}</td>
            <td>{{ $item->WF_EDate}}</td>
            <td>
                <a href='{{ url('WeeklyFocus/' . $item->WF_Description.'/viewP') }}' class="btn btn-info btn-sm">View</a>
                @if ($data4->count() > 1)
                <form action='{{ url('WeeklyFocus/'. $item->WF_Description) }}' method="POST" class='d-inline' onsubmit="return confirm('Want to delete the data?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Del</button>
                </form>
                @else
                <button type="button" class="btn btn-danger btn-sm" onclick="showMessage()">Del</button>
                @endif
            </td>
        </tr>
        <?php $i++; ?>
            @endforeach
            @foreach ($data as $item)
            @if ($item->WF_Type == 'recovery')
            <?php  $i=2;?>
            <tr>
                <td>{{$i}}</td>
                <td>{{ $item->WF_Description}}</td>
                <td>{{ $item->WF_SDate}}</td>
                <td>{{ $item->WF_EDate}}</td>
                <td>
                    <a href='{{ url('WeeklyFocus/' . $item->WF_Description.'/viewP') }}' class="btn btn-info btn-sm">View</a>
                    <form action='{{ url('WeeklyFocus/'. $item->WF_Description) }}' method="POST" class = 'd-inline' onsubmit="return confirm('Want to delete the data?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Del</button>
                    </form>
                </td>
            </tr>
            <?php $i++; ?>
            @endif
        @endforeach
        </tbody>
    </table>
</div>
<hr>
<!-- Centered table -->
<table class="center" style="margin: 0 auto;"></table>
<!-- End of content -->

<script>
    function showMessage() {
        alert('Last data cannot be deleted.');
    }
</script>
@endsection
