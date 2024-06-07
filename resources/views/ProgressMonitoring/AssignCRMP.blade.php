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

    <h4><b>LIST OF CRMP</b></h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">ID</th>
                <th class="col-md-4">NAME</th>
                <th class="col-md-2">ACTION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1001</td>
                <td>Ani</td>
                <td>
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#chooseModal">Choose</button>
                </td>
            </tr>
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
                        <tr>
                            <td><input type="checkbox" name="platinum[]" value="2001"></td>
                            <td>2001</td>
                            <td>Platinum 1</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="platinum[]" value="2002"></td>
                            <td>2002</td>
                            <td>Platinum 2</td>
                        </tr>
                        <!-- Add more items as needed -->
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="return confirm('Confirm to assign')">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
@endsection
