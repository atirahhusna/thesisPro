@extends('Header/platinum')
@section('content')
<title>Edit Expert</title>
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
            display: block;
            margin-bottom: 5px;
        }
        .form-group textarea {
            width: 70%; /* This will make the textarea take the full width of its container */
            padding: 10px;
            font-size: 14px;
            line-height: 1.5;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>

<div class="container-form">
                <h3>EDIT EXPERT</h3>

                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif

                <form action="{{url('UpdateExpert')}}" method="POST">
                    @csrf
                    <input type="hidden" name="e_ID" value="{{$data->e_ID}}">
                    <div class="section">
                        <div class="section-header">Expert’s details</div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="e_Name">NAME</label>
                                <input type="text" id="e_Name" name="e_Name" required value="{{$data->e_Name}}">
                                @error('e_Name')
                                <div class="alert alert-danger" role="alert"></div>
                                    {{$message}}
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="e_University">WORKPLACE</label>
                                <input type="text" id="e_University" name="e_University" required value="{{$data->e_University}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="e_Email">EMAIL</label>
                                <input type="email" id="e_Email" name="e_Email" required value="{{$data->e_Email}}">
                            </div>
                            <div class="form-group">
                                <label for="e_PhoneNum">PHONE NUMBER</label>
                                <input type="tel" id="e_PhoneNum" name="e_PhoneNum" required value="{{$data->e_PhoneNum}}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="e_Expertise">EXPERTISE</label>
                                <input type="text" id="e_Expertise" name="e_Expertise" required value="{{$data->e_Expertise}}">
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="section-header">Research</div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="e_TitleResearch">TITLE RESEARCH</label>
                                <textarea id="e_TitleResearch" name="e_TitleResearch" required>{{$data->e_TitleResearch}}</textarea>
                                <label for="e_Paper">PAPER</label>
                                <textarea id="e_Paper" name="e_Paper" required>{{$data->e_Paper}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                        <a href="{{url('ViewExpert')}}" class="btn btn-danger">BACK</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection