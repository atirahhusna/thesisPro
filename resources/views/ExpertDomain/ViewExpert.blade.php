@extends('Header/platinum')
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
        
            @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
        <div class="col-14">                    
            <div class="card">
                <div class="card-header">
                    <h3>Expert List</h3>
                    <div style="margin-right:10px">
                <a href="{{url('AddExpert')}}" style="float:right;" class="btn btn-primary">ADD EXPERT</a><br>
            </div><br>

                    <table class = "table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Expert Name</th>
                            <th>Expertise</th>
                            <th>Year</th>
                            <th>Type of Publications</th>
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
                                <td>{{$expert->e_Expertise}}</td>
                                <td>{{$expert->year}}</td>
                                <td>{{$expert->TypeOfPublication}}</td>
                                <td>
                                <a href="{{url('ExpertDetail/'.$expert->e_ID)}}" class="btn btn-primary">VIEW</a>
                                <a href="{{url('EditExpert/'.$expert->e_ID)}}" class="btn btn-primary">EDIT</a>
                                <a href="{{url('DeleteExpert/'.$expert->e_ID)}}" class="btn btn-danger">DELETE</a>

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