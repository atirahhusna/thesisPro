@extends('Header.staff')
@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Registered Users</h2>

    @if (session('message'))
        <div class="alert {{ session('alert-class') }}">
            {{ session('message') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Username</th>
                <th>Name</th>
                <th>Program</th>
                <th>Phone Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $index => $user)
        <tr>
                    <td>{{ $user->r_identity_card }}</td>
                    <td>{{ $user->r_name }}</td>
                    <td>{{ $user->r_program }}</td>
                    <td>{{ $user->r_phone_number }}</td>
                    <td>
                        <a href="{{ url('RegisterList/'.$user->r_profile_id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('destroy', $user->r_profile_id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">Delete</button>
                        </form>
                    </td>
                </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
