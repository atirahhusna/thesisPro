@extends('Header/crmp')
@section('content')

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
                 <!-- FORM PENCARIAN -->
                 <div class="pb-3">
                   <form class="d-flex" action="" method="get">
                       <input class="form-control me-1" type="search" name="katakunci" value="" placeholder="Enter ID Matric Platinum" aria-label="Search">
                       <button class="btn btn-secondary" type="submit">Search</button>
                   </form>
                 </div>
           
                 <table class="table table-striped">
                     <thead>
                         <tr>
                             <th class="col-md-1">No</th>
                             <th class="col-md-3">Name</th>
                             <th class="col-md-4">ID Matric</th>
                             <th class="col-md-2">Thesis No.</th>
                             <th class="col-md-2">Action</th>
                         </tr>
                     </thead>
                     <tbody>
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
                 </table>
                 
           </div>
          <!-- AKHIR DATA -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

@endsection