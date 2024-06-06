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
                     <thead>
                         <tr>
                             <th class="col-md-1">No</th>
                             <th class="col-md-3">Name</th>
                             <th class="col-md-4">ID Matric</th>
                             <th class="col-md-2">Total Draft</th>
                             <th class="col-md-2">Action</th>
                         </tr>
                     </thead>
                     <tbody id="platinumList">
                        <tr>
                            <td>1</td>
                            <td>ME</td>
                            <td>CB21101</td>
                            <td>4</td>
                            <td>
                                <a href='' class="btn btn-warning btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>YOU</td>
                            <td>CB21102</td>
                            <td>5</td>
                            <td>
                                <a href='' class="btn btn-warning btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>US</td>
                            <td>CB21103</td>
                            <td>7</td>
                            <td>
                                <a href='' class="btn btn-warning btn-sm">View</a>
                            </td>
                        </tr>
                     </tbody>
                     <tbody id="crmpList" style="display: none;">
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>CRMP1001</td>
                            <td>2</td>
                            <td>
                                <a href='' class="btn btn-warning btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Doe</td>
                            <td>CRMP1002</td>
                            <td>3</td>
                            <td>
                                <a href='' class="btn btn-warning btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>John Smith</td>
                            <td>CRMP1003</td>
                            <td>5</td>
                            <td>
                                <a href='' class="btn btn-warning btn-sm">View</a>
                            </td>
                        </tr>
                     </tbody>
                 </table>
                 
           </div>
          <!-- AKHIR DATA -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script>
      document.getElementById('platinumBtn').addEventListener('click', function() {
        document.getElementById('listTitle').innerText = 'LIST OF PLATINUM';
        document.getElementById('platinumList').style.display = '';
        document.getElementById('crmpList').style.display = 'none';
        document.getElementById('searchInput').placeholder = 'Enter ID Matric Platinum';
        
        // Toggle button active state
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
        
        // Toggle button active state
        document.getElementById('crmpBtn').classList.add('active-btn');
        document.getElementById('platinumBtn').classList.remove('active-btn');
        document.getElementById('crmpBtn').classList.remove('btn-secondary');
        document.getElementById('platinumBtn').classList.add('btn-secondary');
      });
    </script>
  </body>
</html>

@endsection
