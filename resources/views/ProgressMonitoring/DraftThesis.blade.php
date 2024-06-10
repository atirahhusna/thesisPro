@extends('Header/platinum')
@section('content')
@php
    $req_id = Session::get('platinum');
    $r_profile_id = session('r_profile_id'); // Retrieve r_profile_id from session or use 'default value' if it doesn't exist
@endphp
<center>
    <hr>
</center>
<link rel="stylesheet" href="{{ asset('ProgressMonitoring/WeeklyFocus.css') }}"/>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body class="bg-light">
<main class="container">
    @if (Session::has('success'))
        <div class="pt-3">
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        </div>
    @endif

    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- SEARCH FORM -->
        <div class="pb-3">
            <form class="d-flex" action="{{ url('DraftThesis') }}" method="get">
                <div style="display: flex; align-items: center;">
                    <input style="width:1000px;height:40px;" type="search" id="search" name="keywords" value="{{ Request::get('keywords') }}" placeholder="Enter keywords">
                    <div class="button-container">
                        <button style="margin-bottom:40px;height:40px;" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Draft No</th>
                    <th>Title</th>
                    <th>Start Date</th>
                    <th>Completion Date</th>
                    <th>Days To Prepare</th>
                    <th>Pages</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->DT_DraftNum }}</td>
                    <td>{{ $item->DT_Title }}</td>
                    <td>{{ $item->DT_SDate }}</td>
                    <td>{{ $item->DT_EDate }}</td>
                    <td>{{ $item->DT_DaysToPrepare }}</td>
                    <td>{{ $item->DT_PagesNum }}</td>
                    <td>
                        <a href='{{ url('DraftThesis/'.$item->DT_Title.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                        <form action='{{ url('DraftThesis/'. $item->DT_Title) }}' method="POST" class="d-inline" onsubmit="return confirm('Want to delete the data?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Del</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <thead>
                <tr>
                    <th colspan="5" style="text-align: right; padding-right:20px;">Total Pages:</th>
                    <td>{{ $data->sum('DT_PagesNum') }}</td>
                </tr>
            </thead>
        </table>

        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a href='{{ url('DraftNewTitle') }}' class="btn btn-primary">+</a>
        </div>
        {{ $data->links() }}
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
@endsection
