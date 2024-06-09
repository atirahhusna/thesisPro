@extends('Header.mentor')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff List</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include custom CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<style>
/* public/css/custom.css */

body {
    background-color: #f8f9fa;
}

.container {
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #343a40;
}

.table thead.thead-dark {
    background-color: #343a40;
    color: #fff;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}
/* public/css/custom.css */

.btn-wide {
    width: 150px; /* Adjust the width as needed */
}

.btn-info {
    background-color: #17a2b8;
    border-color: #17a2b8;
}


.btn-info {
    background-color: #17a2b8;
    border-color: #17a2b8;
}

.alert {
    margin-bottom: 0;
    padding: 0.75rem 1.25rem;
}
</style>
<body>
    <div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Staff List</h2>
        @if (session('message'))
            <div class="alert {{ session('alert-class') }} mb-0">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <!-- Search form -->
    <form action="{{ url('Mentor.staffList/search') }}" method="get" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search by username or name" value="{{ Request::get('search') }}">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Email</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->s_email }}</td>
                    <td>{{ $user->s_name }}</td>
                    <td>
                    <a href="{{ url('Mentor.StaffList/'. $user->staff_id.'/show') }}" class="btn btn-info btn-wide">View</a>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    <!-- Include Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@endsection
