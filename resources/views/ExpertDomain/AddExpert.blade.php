@extends('Header/platinum')
@section('content')

<style>
.container-form {
            background-color: #f5f5f5;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 900px;
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
        //.form-group textarea {
            width: 60%; /* This will make the textarea take the full width of its container */
            padding: 3px;
            font-size: 14px;
            line-height: 1.5;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>

<div class="container-form">
                <h3>EXPERT REGISTRATION</h3>

                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif

                <form action="{{url('SaveExpert')}}" method="POST">
                    @csrf
                    <div class="section">
                        <div class="section-header">Expert’s details</div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="e_Name">NAME</label>
                                <input type="text" style="width:400px; height:40px" id="e_Name" name="e_Name" required value="{{old('e_Name')}}">
                            </div>
                            <div class="form-group">
                                <label for="e_University">WORKPLACE</label>
                                <select style="width:400px;height:40px;margin-right:20px;" id="e_University" name="e_University">
                                    <option value="">Select institution</option>
                                    <option value="Universiti Islam Antarabangsa Malaysia (UIAM)">Universiti Islam Antarabangsa Malaysia (UIAM)</option>
                                    <option value="Universiti Kebangsaan Malaysia (UKM)">Universiti Kebangsaan Malaysia (UKM)</option>
                                    <option value="Universiti Malaysia Kelantan (UMK)">Universiti Malaysia Kelantan (UMK)</option>
                                    <option value="Universiti Malaysia Pahang Al-Sultan Abdullah (UMPSA)">Universiti Malaysia Pahang Al-Sultan Abdullah (UMPSA)</option>
                                    <option value="Universiti Malaysia Perlis (UniMAP)">Universiti Malaysia Perlis (UniMAP)</option>
                                    <option value="Universiti Malaysia Sabah (UMS)">Universiti Malaysia Sabah (UMS)</option>
                                    <option value="Universiti Malaysia Sarawak (UNIMAS)">Universiti Malaysia Sarawak (UNIMAS)</option>
                                    <option value="Universiti Malaysia Terengganu (UMT)">Universiti Malaysia Terengganu (UMT)</option>
                                    <option value="Universiti Malaya (UM)">Universiti Malaya (UM)</option>
                                    <option value="Universiti Pertahanan Nasional Malaysia (UPNM)">Universiti Pertahanan Nasional Malaysia (UPNM)</option>
                                    <option value="Universiti Putra Malaysia (UPM)">Universiti Putra Malaysia (UPM)</option>
                                    <option value="Universiti Sains Islam Malaysia (USIM)">Universiti Sains Islam Malaysia (USIM)</option>
                                    <option value="Universiti Sains Malaysia (USM)">Universiti Sains Malaysia (USM)</option>
                                    <option value="Universiti Teknikal Malaysia Melaka (UTeM)">Universiti Teknikal Malaysia Melaka (UTeM)</option>
                                    <option value="Universiti Teknologi MARA (UiTM)">Universiti Teknologi MARA (UiTM)</option>
                                    <option value="Universiti Teknologi Malaysia (UTM)">Universiti Teknologi Malaysia (UTM)</option>
                                    <option value="Universiti Tun Hussein Onn Malaysia (UTHM)">Universiti Tun Hussein Onn Malaysia (UTHM)</option>
                                    <option value="Universiti Utara Malaysia (UUM)">Universiti Utara Malaysia (UUM)</option>
                                    <option value="Sultan Zainal Abidin (UniSZA)">Sultan Zainal Abidin (UniSZA)</option>
                                    <option value="Universiti Pendidikan Sultan Idris (UPSI)">Universiti Pendidikan Sultan Idris (UPSI)</option>
                                  </select>                            
                                </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="e_Email">EMAIL</label>
                                <input type="email" style="width:400px; height:40px" id="e_Email" name="e_Email" required value="{{old('e_Email')}}">
                            </div>
                            <div class="form-group">
                                <label for="e_PhoneNum">PHONE NUMBER</label>
                                <input type="tel" style="width:400px; height:40px" id="e_PhoneNum" name="e_PhoneNum" required value="{{old('e_PhoneNum')}}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="e_Expertise">EXPERTISE</label>
                                <input type="text" style="width:400px; height:40px" id="e_Expertise" name="e_Expertise" required value="{{old('e_Expertise')}}">
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="section-header">Research</div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="e_TitleResearch">TITLE RESEARCH</label> 
                                <textarea id="e_TitleResearch" style="height: 80px; width: 50%;" name="e_TitleResearch" required value="{{old('e_TitleResearch')}}"></textarea>
                                <label for="e_Paper">PAPER</label>
                                <textarea id="e_Paper" style="height: 80px; width: 50%;" name="e_Paper" required value="{{old('e_Paper')}}"></textarea>
                                <label for="author">AUTHOR</label>
                                <input type="text" style="width:400px; height:40px" id="author" name="author" required value="{{old('author')}}">
                                <label for="date">PUBLICATION DATE</label>
                                <input type="date" style="width:400px; height:40px" id="date" name="date" required value="{{old('date')}}">

                                <label for="type">TYPE OF PUBLICATION</label>
                                <select type="option" id="type" name="type" required>
                                    <option value="">Select publication type</option>
                                    <option value="Article">Article</option>
                                    <option value="Case Studies">Case Studies</option>
                                    <option value="Journal">Journal</option>
                                    <option value="Review">Review</option>
                                    <option value="Thesis">Thesis</option>
                                </select>   
                                
                                <label for="DOI">DOI</label>
                                <input type="TEXT" style="width:400px; height:40px" id="DOI" name="DOI" required value="{{old('DOI')}}">


                                
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">ADD EXPERT</button>
                        <a href="{{url('ViewExpert')}}" class="btn btn-danger">BACK</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection