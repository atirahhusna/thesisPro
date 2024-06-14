@extends('Header/platinum')
@section('content')
<title>EXPERT DETAIL</title>
<style>
.container-form {
            background-color: #f5f5f5;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 700px;
            width: 100%;
            margin: auto;
        }

        h3 {
            background-color: #2B7A78;
            padding: 10px;
            text-align: center;
            border-radius: 10px 10px 0 0;
            margin: -20px -20px 20px -20px;
            color: white;
        }

        .section-header {
            display: flex;
            align-items: center;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 10px;
            color: #6b6b6b;
            font-weight: bold;
        }

        .section-header::before, 
        .section-header::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #d0d7a4;
            margin: 0 10px;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .form-group {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            margin-bottom: 2px;
        }

        .form-group input, 
        .form-group select {
            padding: 4px 0px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 300px;
        }

        .form-group + .form-group {
            margin-left: 10px;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 20px;
        }

        .form-actions button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-actions button[type="submit"] {
            background-color: #4CAF50;
            color: white;
        }

        .form-actions button[type="reset"] {
            background-color: #008CBA;
            color: white;
        }

        #year {
            width: 100px;
        }

        #paper {
            width: 400px;
        }

        #titleResearch {
            width: 400px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            font-size: 1.2em;
            display: block;
            margin-bottom: 5px;
        }
        .p {
            font-size: 1em; /* Standard font size for data */
            margin-bottom: 10px;
            font-weight: normal;
            padding: 4px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #e9ecef;
            color: blue;
        }
        .expert-detail {
            color: #1E47A7; /* or any other color value */
        }
    </style>

<div class="container-form">
                <h3>EXPERT'S DETAILS</h3>

                <form action="{{url('UpdateExpert')}}" method="POST">
                    @csrf
                    <div class="section">
                        <div class="section-header">Expert’s details</div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="e_Name"><strong>NAME</label>
                                <p class="expert-detail">{{$data->e_Name}}</p>
                                <label for="e_University"><strong>WORKPLACE</label>
                                <p class="expert-detail">{{$data->e_University}}</p>
                                <label for="e_Email"><strong>EMAIL</label>
                                <p class="expert-detail">{{$data->e_Email}}</p>
                                <label for="e_PhoneNum"><strong>PHONE NUMBER</label>
                                <p class="expert-detail">{{$data->e_PhoneNum}}</p>
                                <label for="e_Expertise"><strong>EXPERTISE</label>
                                <p class="expert-detail">{{$data->e_Expertise}}</p>


                                <label for="e_TitleResearch"><strong>TITLE RESEARCH</label>
                                <p class="expert-detail"> {{ \Carbon\Carbon::parse($data->date)->format('Y, ') }} {{$data->e_TitleResearch}}. {{$data->e_Paper,}} {{$data->DOI}}</p>                               
                                <label for="type"><strong>Type of Publication</label>
                                <p class="expert-detail">{{$data->type}}</p>

                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <a href="{{url('ViewExpert')}}" class="btn btn-danger">BACK</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection