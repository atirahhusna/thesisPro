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
<!-- START FORM -->
<form action='{{ url('DraftThesis')}}' method='post'>
  @csrf
  <div class="mb-3 row">
    <div class="col-sm-10">
        <a href="{{ url('DraftThesis') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>
</div>
  <!-- Select type -->
  <div class="mb-3 row">
      <label for="DT_Title" class="col-sm-2 col-form-label">Title Thesis</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="DT_Title" id="DT_Title">{{ Session::get('DT_Title')}}</textarea>
      </div>
  </div>
  <!-- Description -->
  <div class="mb-3 row">
      <label for="DT_SDate" class="col-sm-2 col-form-label">Start Date</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" name='DT_SDate' value="{{ Session::get('DT_SDate')}}" id="DT_SDate">
      </div>
  </div>
  <!-- Start Date -->
  <div class="mb-3 row">
      <label for="DT_EDate" class="col-sm-2 col-form-label">End Date</label>
      <div class="col-sm-10">
          <div class="col-sm-10">
            <input type="date" class="form-control" name='DT_EDate' value="{{ Session::get('DT_EDate')}}" id="DT_EDate">
          </div>
      </div>
  </div>
  <!-- End Date -->
  <div class="mb-3 row">
      <label for="DT_PagesNum" class="col-sm-2 col-form-label">Pages</label>
      <div class="col-sm-10">
          <div class="col-sm-10">
            <input type="number" class="form-control" name='DT_PagesNum' value="{{ Session::get('DT_PagesNum')}}" id="DT_PagesNum">
          </div>
      </div>
  </div>

  <div class="mb-3 row">
    <label for="jurusan" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="submit">Confirm</button>
      <button type="submit" class="btn btn-warning" name="submit">Reset</button>
    </div>
</div>
</form>
    <!-- AKHIR FORM -->
@endsection