@extends('Header/mentor')
@section('content')

<style>
    .table {
        width: 100%;
    }

    h3 {
        color: black;
        margin-top: 10px;
        font-family: "Helvetica", sans-serif;
    }
</style>

<title>Expert List</title>

<div class="container">
    <div class="row" style="margin:10px;">                    
        <div class="col-14">                    
            <div class="card">
                <div class="card-header">
                    <h3>Expert List</h3>
                    <div style="margin-right:10px">
            </div><br>

                    <table class = "table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Expert Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                            $i = 1;
                        @endphp
                        @foreach ($data as $expert)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$expert->e_Name}}</td>
                                <td>
                                <a href="{{url('MentorView/'.$expert->e_ID)}}" class="btn btn-primary">VIEW</a>
                                </td>

                            </tr>
                            @php 
                                $i++;
                            @endphp
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>











@endsection 