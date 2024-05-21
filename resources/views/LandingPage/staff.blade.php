@extends('Header.staff')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background-color: #fff;
    padding: 20px 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 400px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
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

button {
    width: 100%;
    padding: 10px 15px;
    background-color: #007BFF;
    border: none;
    border-radius: 4px;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}
</style>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form id="registrationForm">
            <div class="form-group">
                <label for="profileID">Profile ID</label>
                <input type="text" id="profileID" name="profileID" maxlength="10" required>
            </div>
            <div class="form-group">
                <label for="identityCard">Identity Card Number</label>
                <input type="number" id="identityCard" name="identityCard" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <input type="text" id="gender" name="gender" maxlength="10">
            </div>
            <div class="form-group">
                <label for="religion">Religion</label>
                <input type="text" id="religion" name="religion" maxlength="10">
            </div>
            <div class="form-group">
                <label for="race">Race</label>
                <input type="text" id="race" name="race" maxlength="10">
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
                <label for="currentEduLevel">Current Education Level</label>
                <input type="text" id="currentEduLevel" name="currentEduLevel" maxlength="30">
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
            <div class="form-group">
                <label for="program">Program</label>
                <input type="text" id="program" name="program" maxlength="30">
            </div>
            <div class="form-group">
                <label for="size">T-shirt Size</label>
                <input type="text" id="size" name="size" maxlength="5">
            </div>
            <div class="form-group">
                <label for="batch">Platinum Batch</label>
                <input type="text" id="batch" name="batch" maxlength="10">
            </div>
            <div class="form-group">
                <label for="platinumID">Platinum ID</label>
                <input type="text" id="platinumID" name="platinumID" maxlength="10">
            </div>
            <div class="form-group">
                <label for="staffID">Staff ID</label>
                <input type="text" id="staffID" name="staffID" maxlength="10">
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>


@endsection