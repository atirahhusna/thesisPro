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
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
   </head>
   <body class="bg-light">
     <main class="container">
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
                       <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Enter Thesis Title" aria-label="Search">
                       <button class="btn btn-secondary" type="submit">Search</button>
                   </form>
                 </div>
           
                 <table class="table table-striped">
                     <thead>
                         <tr>
                             <th class="col-md-1">No</th>
                             <th class="col-md-3">Title</th>
                             <th class="col-md-4">No. of Draft</th>
                             <th class="col-md-2">Actions</th>
                         </tr>
                     </thead>
                     <tbody>
                      <?php $i = $data->firstItem(); ?>
                      @foreach ($data as $item)
                      <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->DT_Title }}</td>
                        <td>{{ $item->DT_DraftNum ?? 0 }}</td>
                        <td>
                            <a href='{{ url('DraftWork/'.$item->DT_Title.'/showDraftList') }}' class="btn btn-warning btn-sm">View</a>
                            <a href='' class="btn btn-danger btn-sm">Del</a>
                        </td>
                      </tr>
                      <?php $i++; ?>
                      @endforeach
                     </tbody>
                 </table>
                 <!-- TOMBOL TAMBAH DATA -->
                 <div class="pb-3">
                      <a href='{{ url('DraftNewTitle') }}' class="btn btn-primary">+</a>
                 </div>
                 {{ $data->links() }}
           </div>
           <!-- AKHIR DATA -->
     </main>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
   </body>
 </html>
@endsection
