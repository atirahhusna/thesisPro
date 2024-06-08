@extends('Header/platinum')
@section('content')
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
     <style>
        
     </style>
   </head>
   <body class="bg-light">
     <main class="container">

         <!-- START DATA -->
         <div class="my-3 p-3 bg-body rounded shadow-sm">
                 <!-- FORM PENCARIAN -->
                 <div class="pb-3">
                   <form class="d-flex" action="" method="get">
                       <input class="form-control me-1" type="search" name="katakunci" value="" placeholder="Enter Draft No." aria-label="Search">
                       <button class="btn btn-warning btn-sm" type="submit">Search</button>
                   </form>
                 </div>
                 
                 <table class="table table-striped">
                     <thead>
                         <tr>
                             <th class="col-md-1">Draft No.</th>
                             <th class="col-md-3">Completed Date</th>
                             <th class="col-md-4">Counted Days</th>
                             <th class="col-md-2">Pages</th>
                             <th class="col-md-2">Actions</th>
                         </tr>
                     </thead>
                     <tbody>
                        <td>1</td>
                        <td>16 dec 2023</td>
                        <td>14</td>
                        <td>69</td>
                        <td>
                            <a href='' class="btn btn-warning btn-sm">View</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2 january 2024</td>
                        <td>17</td>
                        <td>65</td>
                        <td>
                            <a href='' class="btn btn-warning btn-sm">View</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>2 February 2024</td>
                        <td>31</td>
                        <td>78</td>
                        <td>
                            <a href='' class="btn btn-warning btn-sm">View</a>
                        </td>
                    </tr>
                     </tbody>
                 </table>
                 <div class="pb-3">
                    <button class="btn btn-primary" onclick="">+</button>
                 </div>
           </div>

           <!-- AKHIR DATA -->
     </main>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
   </body>
 </html>
@endsection