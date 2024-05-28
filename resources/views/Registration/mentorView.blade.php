@extends('Header.mentor')
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
            </tr>
        </thead>
        <tbody>
        @foreach($users as $index => $user)
        <tr>
                    <td>{{ $user->r_identity_card }}</td>
                    <td>{{ $user->r_name }}</td>
                    <td>{{ $user->r_program }}</td>
                    <td>{{ $user->r_phone_number }}</td>
                </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
