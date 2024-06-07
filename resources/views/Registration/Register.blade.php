@extends('Header.staff')
<title>Register form</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    padding: 20px;
    margin: 0;
}

.container {
    background-color: #fff;
    padding: 20px 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 400px;
    margin: 0 auto;
    margin-top: 20px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
    width: 70%;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-group input, .form-group select {
    width: calc(100% - 20px);
    padding: 8px 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.button-place {
    text-align: center;
}

button {
    padding: 10px 20px;
    background-color: #007BFF;
    border: none;
    border-radius: 4px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    margin-top: 15px;
}

.form-container {
    width: 70%;
    margin: 0 auto;
}

button:hover {
    background-color: #0056b3;
}
</style>

@section('content')
<div class="form-container">
    <div class="container">
        <h2>Registration Form</h2>

        <!-- Display success message -->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Display error message -->
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <!-- Display validation errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="registrationForm" method="POST" action="{{ route('registerPost') }}">
            @csrf
            @method('post')
           
            <div class="form-group">
    <label for="r_name">Name</label>
    <input type="text" id="r_name" name="r_name" maxlength="30" required>
</div>

            <div class="form-group">
                <label for="r_password">Password</label>
                <input type="password" id="r_password" name="r_password" maxlength="30" required>
            </div>
            <div class="form-group">
                <label for="r_identity_card">Identity Card Number</label>
                <input type="text" id="r_identity_card" name="r_identity_card" required>
            </div>
            <div class="form-group">
                <label for="r_gender">Gender</label>
                <select id="r_gender" name="r_gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="r_religion">Religion</label>
                <select id="r_religion" name="r_religion">
                    <option value="Christianity">Christianity</option>
                    <option value="Islam">Islam</option>
                    <option value="Hinduism">Hinduism</option>
                    <option value="Buddhism">Buddhism</option>
                    <option value="Judaism">Judaism</option>
                </select>
            </div>
            <div class="form-group">
                <label for="r_race">Race</label>
                <select id="r_race" name="r_race">
                    <option value="Malay">Malay</option>
                    <option value="Chinese">Chinese</option>
                    <option value="Indian">Indian</option>
                    <option value="Bumiputera">Bumiputera</option>
                </select>
            </div>
            <div class="form-group">
                <label for="r_citizenship">Citizenship</label>
                <input type="text" id="r_citizenship" name="r_citizenship" maxlength="15">
            </div>
            <div class="form-group">
                <label for="r_address">Address</label>
                <input type="text" id="r_address" name="r_address" maxlength="100">
            </div>
            <div class="form-group">
                <label for="r_phone_number">Phone Number</label>
                <input type="number" id="r_phone_number" name="r_phone_number">
            </div>
            <div class="form-group">
                <label for="r_facebook">Facebook Account</label>
                <input type="text" id="r_facebook" name="r_facebook" maxlength="20">
            </div>
            <h2>Education Information</h2>
            <div class="form-group">
                <label for="r_current_edu_level">Current Education Level</label>
                <select id="r_current_edu_level" name="r_current_edu_level">
                    <option value="Bachelor's Degree">Bachelor's Degree</option>
                    <option value="Master's Degree">Master's Degree</option>
                    <option value="PhD">PhD</option>
                </select>
            </div>
            <div class="form-group">
                <label for="r_edu_field">Education Field</label>
                <input type="text" id="r_edu_field" name="r_edu_field" maxlength="30">
            </div>
            <div class="form-group">
                <label for="r_edu_institute">Education Institute</label>
                <input type="text" id="r_edu_institute" name="r_edu_institute" maxlength="30">
            </div>
            <div class="form-group">
                <label for="r_occupation">Occupation</label>
                <input type="text" id="r_occupation" name="r_occupation" maxlength="30">
            </div>
            <div class="form-group">
                <label for="r_sponsor">Sponsorship Company Name</label>
                <input type="text" id="r_sponsor" name="r_sponsor" maxlength="30">
            </div>
            <h2>Program Information</h2>
            <div class="form-group">
                <label for="r_program">Program Interested (Required)</label>
                <select id="r_program" name="r_program">
                    <option value="Platinum Professorship">Platinum Professorship</option>
                    <option value="Platinum Premier">Platinum Premier</option>
                    <option value="Platinum Elite">Platinum Elite</option>
                    <option value="Platinum Dr. Jr.">Platinum Dr. Jr.</option>
                    <option value="Ala Carte">Ala Carte</option>
                </select>
            </div>
            <div class="form-group">
                <label for="r_size">T-shirt Size (Berkolar & Lengan Pendek Sahaja) (Required)</label>
                <select id="r_size" name="r_size">
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="2XL">2XL</option>
                    <option value="3XL">3XL</option>
                </select>
            </div>
            <div class="form-group">
                <label for="r_batch">Platinum Batch</label>
                <input type="text" id="r_batch" name="r_batch" maxlength="10">
            </div>
            <div class="button-place">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection