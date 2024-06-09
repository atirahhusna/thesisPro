@extends('Header/staff')
@section('content')
<!-- START DATA -->
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
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
        <form class="d-flex" action="" method="get" style="padding-bottom: 2%">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Enter ID" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Search</button>
        </form>
    </div>
    @if (Session::has('success'))
    <div class="pt-3">
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
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

    <h4><b>LIST OF CRMP</b></h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">ID</th>
                <th class="col-md-4">NAME</th>
                <th class="col-md-2">MARK</th>
                <th class="col-md-1">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($crmps as $crmp)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $crmp->r_profile_id }}</td>
                <td>{{ $crmp->r_name }}</td>
                <td>{{ $crmp->r_mark }}</td>
                <td>
                    <button class="btn btn-warning btn-sm assign-btn" data-bs-toggle="modal" data-bs-target="#chooseModal" data-profile-id="{{ $crmp->r_profile_id }}">Choose</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- AKHIR DATA -->

<!-- Modal -->
<div class="modal fade" id="chooseModal" tabindex="-1" aria-labelledby="chooseModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="chooseModalLabel">Choose Platinum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Search Bar -->
                <form class="d-flex mb-3" action="" method="get">
                    <input class="form-control me-1" type="search" placeholder="Search Platinum" aria-label="Search">
                    <button class="btn btn-secondary" type="submit">Search</button>
                </form>
                <!-- List of Platinum -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">Select</th>
                            <th class="col-md-3">ID</th>
                            <th class="col-md-4">NAME</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($profiles as $profile)
                        <tr>
                            <td>
                                <input type="checkbox" name="platinum[]" value="{{ $profile->r_profile_id }}">
                            </td>
                            <td>{{ $profile->r_profile_id }}</td>
                            <td>{{ $profile->r_name }}</td>
                        </tr>
                        @endforeach
                        <!-- Add more items as needed -->
                    </tbody>
                </table>
                <!-- Hidden form for assigning Platinum -->
                <form id="assignForm" action="{{ route('storeCRMP') }}" method="POST" style="display: none;">
                    @csrf
                    <input type="hidden" id="selectedPlatinum" name="selected_platinum">
                    <input type="hidden" id="selectedCRMPProfileId" name="selected_crmp_profile_id">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleSubmit()">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript to handle assigning Platinum
    const assignButtons = document.querySelectorAll('.assign-btn');
    const assignForm = document.getElementById('assignForm');
    const selectedPlatinumInput = document.getElementById('selectedPlatinum');
    const selectedCRMPProfileIdInput = document.getElementById('selectedCRMPProfileId');

    assignButtons.forEach(button => {
    button.addEventListener('click', () => {
        const profileId = button.getAttribute('data-profile-id');
        selectedCRMPProfileIdInput.value = profileId; // Set the value of the hidden input
        assignForm.action = '{{ route("storeCRMP") }}'; // Update the form action
    });
});

    function handleSubmit() {
        const selectedCheckboxes = document.querySelectorAll('input[name="platinum[]"]:checked');
        const selectedPlatinumIds = Array.from(selectedCheckboxes).map(cb => cb.value);
        selectedPlatinumInput.value = JSON.stringify(selectedPlatinumIds);
        assignForm.submit();
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
@endsection
