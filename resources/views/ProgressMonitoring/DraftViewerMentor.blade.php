@extends('Header/mentor')
@section('content')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
      .active-btn {
        background-color: #007bff;
        color: white;
      }
    </style>
  </head>
  <body class="bg-light">
    <main class="container">
       <!-- START FORM -->
       @if (Session::has('success'))
       <div class="pt-3">
         <div class="alert alert-success">
             {{ Session::get('success') }}
         </div>
       </div>
       @endif
         
       <!-- START DATA -->
       <div class="my-3 p-3 bg-body rounded shadow-sm">
         <!-- Buttons to switch views -->
         <div class="pb-3">
           <button id="platinumBtn" class="btn btn-primary active-btn">Platinum</button>
           <button id="crmpBtn" class="btn btn-secondary">CRMP</button>
         </div>
                 
         <!-- FORM PENCARIAN -->
         <div class="pb-3">
           <form class="d-flex" action="" method="get" style="padding-bottom: 2%">
               <input class="form-control me-1" type="search" name="katakunci" id="searchInput" placeholder="Enter ID Matric" aria-label="Search">
               <button class="btn btn-secondary" type="submit">Search</button>
           </form>
         </div>
           
         <h4><b id="listTitle">LIST OF PLATINUM</b></h4>
         <table class="table table-striped">
           <thead id="tableHeader">
             <tr>
               <th class="col-md-1">No</th>
               <th class="col-md-3">ID Matric</th>
               <th>Name</th>
               <th>CRMP ID</th>
               <th class="col-md-2">Total Draft</th>
               <th class="col-md-1">Action</th>
             </tr>
           </thead>
           <tbody id="platinumList">
             @foreach($profiles as $profile)
             <tr>
               <td>{{ $loop->iteration }}</td>
               <td>{{ $profile->r_profile_id }}</td>
               <td>{{ $profile->r_name }}</td>
               <td>{{ $profile->crmp->crmp_id ?? 'N/A' }}</td> <!-- Display CRMP ID -->
               <td>7</td>
               <td>
                 <a href='' class="btn btn-warning btn-sm">View</a>
               </td>
             </tr>
             @endforeach
           </tbody>
           <tbody id="crmpList" style="display: none;">
             @foreach($crmps as $crmp)
             <tr>
               <td>{{ $loop->iteration }}</td>
               <td>{{ $crmp->crmp_id }}</td>
               <td>{{ $crmp->crmp_name }}</td>
               <td>
                 <a href='' class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#chooseModal">View</a>
               </td>
               <td>
                 <a href='' class="btn btn-warning btn-sm">View</a>
               </td>
             </tr>
             @endforeach
           </tbody>
         </table>
       </div>
       
       <!-- Modal -->
       <div class="modal fade" id="chooseModal" tabindex="-1" aria-labelledby="chooseModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
           <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title" id="chooseModalLabel">List Of Platinum</h5>
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
                     <th class="col-md-1">No</th>
                     <th class="col-md-3">ID</th>
                     <th class="col-md-4">NAME</th>
                     <th class="col-md-1">ACTION</th>
                   </tr>
                 </thead>
                 <tbody>
                   @foreach($profiles as $profile)
                   <tr>
                     <td>{{ $loop->iteration }}</td>
                     <td>{{ $profile->r_profile_id }}</td>
                     <td>{{ $profile->r_name }}</td>
                     <td>{{ $profile->crmp->crmp_id ?? 'N/A' }}</td> <!-- Display CRMP ID -->
                     <td>
                       <a href='' class="btn btn-warning btn-sm">View</a>
                     </td>
                   </tr>
                   @endforeach
                 </tbody>
               </table>
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
             </div>
           </div>
         </div>
       </div>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script>
      document.getElementById('platinumBtn').addEventListener('click', function() {
        document.getElementById('listTitle').innerText = 'LIST OF PLATINUM';
        document.getElementById('platinumList').style.display = '';
        document.getElementById('crmpList').style.display = 'none';
        document.getElementById('searchInput').placeholder = 'Enter ID Matric Platinum';
        
        document.getElementById('tableHeader').innerHTML = `
          <tr>
            <th class="col-md-1">No</th>
            <th class="col-md-3">ID Matric</th>
            <th>Name</th>
            <th>CRMP ID</th>
            <th class="col-md-2">Total Draft</th>
            <th class="col-md-1">Action</th>
          </tr>`;
        
        document.getElementById('platinumBtn').classList.add('active-btn');
        document.getElementById('crmpBtn').classList.remove('active-btn');
        document.getElementById('platinumBtn').classList.remove('btn-secondary');
        document.getElementById('crmpBtn').classList.add('btn-secondary');
      });

      document.getElementById('crmpBtn').addEventListener('click', function() {
        document.getElementById('listTitle').innerText = 'LIST OF CRMP';
        document.getElementById('platinumList').style.display = 'none';
        document.getElementById('crmpList').style.display = '';
        document.getElementById('searchInput').placeholder = 'Enter ID Matric CRMP';
        
        document.getElementById('tableHeader').innerHTML = `
          <tr>
            <th class="col-md-1">No</th>
            <th class="col-md-3">ID</th>
            <th>Name</th>
            <th class="col-md-3">List of Platinum</th>
            <th class="col-md-1">Action</th>
          </tr>`;
        
        document.getElementById('crmpBtn').classList.add('active-btn');
        document.getElementById('platinumBtn').classList.remove('active-btn');
        document.getElementById('crmpBtn').classList.remove('btn-secondary');
        document.getElementById('platinumBtn').classList.add('btn-secondary');
      });
    </script>
@endsection
