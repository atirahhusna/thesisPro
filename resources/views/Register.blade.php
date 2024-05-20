@extends('Header.staff')
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    padding: 20px; /* Add padding to create space around the content */
    margin: 0;
}

.container {
    background-color: #fff;
    padding: 20px 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 400px;
    margin: 0 auto; /* Center the container horizontally */
    margin-top: 20px; /* Add margin at the top of the container */
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

.form-group input {
    width: calc(100% - 20px);
    padding: 8px 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="text"],
select {
    width: 150%; /* Set the width of the input/select elements to fill the container */
}

.button-place {
    text-align: center; /* Center-align the content */
}

button {
    padding: 10px 20px; /* Adjust padding to your preference */
    background-color: #007BFF;
    border: none;
    border-radius: 4px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    margin-top: 15px;
}

.form-container {
    width: 70%; /* Set a specific width for the form container */
    margin: 0 auto; /* Center-align the form container horizontally */
}

button:hover {
    background-color: #0056b3;
}
</style>

@section('content')
<div class="form-container">
<div class="container">
    <h2>Registration Form</h2>
    <form id="registrationForm" method="POST" action="/register">
        @csrf
    <div class="form-container">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="Title" name="Title" maxlength="30" required>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" maxlength="30" required>
        </div>
        <div class="form-group">
            <label for="identityCard">Identity Card Number</label>
            <input type="number" id="identityCard" name="identityCard" required>
        </div>
        <div class="form-group">
    <label for="gender">Gender</label>
    <select id="gender" name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>
</div>

<div class="form-group">
    <label for="religion">Religion</label>
    <select id="religion" name="religion">
        <option value="Christianity">Christianity</option>
        <option value="Islam">Islam</option>
        <option value="Hinduism">Hinduism</option>
        <option value="Buddhism">Buddhism</option>
        <option value="Judaism">Judaism</option>
    </select>
</div>

<div class="form-group">
    <label for="race">Race</label>
    <select id="race" name="race">
        <option value="Malay">Malay</option>
        <option value="Chinese">Chinese</option>
        <option value="Indian">Indian</option>
        <option value="Bumiputera">Bumiputera</option>
        <!-- Add more Malaysian race options as needed -->
    </select>
</div>

        <div class="form-group">
            <label for="citizenship">Citizenship</label>
            <input type="text" id="citizenship" name="citizenship" maxlength="15">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" maxlength="100">
        </div>
        <div class="form-group">
            <label for="phoneNumber">Phone Number</label>
            <input type="number" id="phoneNumber" name="phoneNumber">
        </div>
        <div class="form-group">
            <label for="facebook">Facebook Account</label>
            <input type="text" id="facebook" name="facebook" maxlength="20">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" maxlength="20">
        </div>
        
        <h2>Education information</h2><br>
        <div class="form-group">
        </div>
       <br>
       <div class="form-group">
    <label for="currentEduLevel">Current Education Level</label>
    <select id="currentEduLevel" name="currentEduLevel">
        <option value="Bachelor's Degree">Bachelor's Degree</option>
        <option value="Master's Degree">Master's Degree</option>
        <option value="phd">Phd</option>
        <!-- Add more education level options as needed -->
    </select>
</div>

        <div class="form-group">
            <label for="eduField">Education Field</label>
            <input type="text" id="eduField" name="eduField" maxlength="30">
        </div>
        <div class="form-group">
            <label for="eduInstitute">Education Institute</label>
            <input type="text" id="eduInstitute" name="eduInstitute" maxlength="30">
        </div>
        <div class="form-group">
            <label for="occupation">Occupation</label>
            <input type="text" id="occupation" name="occupation" maxlength="30">
        </div>
        <div class="form-group">
            <label for="sponsor">Sponsorship Company Name</label>
            <input type="text" id="sponsor" name="sponsor" maxlength="30">
        </div>
        <h2>Program Information</h2><br><br>
        <div class="form-group">
    <label for="program">Program Interested (Required)</label>
    <select id="program" name="program">
        <option value="Platinum Professorship">Platinum Professorship</option>
        <option value="Platinum Premier">Platinum Premier</option>
        <option value="Platinum Elite">Platinum Elite</option>
        <option value="Platinum Dr. Jr.">Platinum Dr. Jr.</option>
        <option value="Ala Carte">Ala Carte</option>
    </select>
</div>

<div class="form-group">
    <label for="size">T-shirt Size (Berkolar & Lengan Pendek Sahaja) (Required)</label>
    <select id="size" name="size">
        <option value="XS">XS</option>
        <option value="S">S</option>
        <option value="2XL">2XL</option>
        <option value="3XL">3XL</option>
    </select>
</div>

        <div class="form-group">
            <label for="batch">Platinum Batch</label>
            <input type="text" id="batch" name="batch" maxlength="10">
        </div>
        <div class="button-place">
        <button style="center" type="submit">Register</button>
        </div>
</div>
    </form>
</div>
</div>

@endsection
