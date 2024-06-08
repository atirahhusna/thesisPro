@extends('Header.platinum')

@section('content')

<style>
  body {
    background-color: #f4f4f4; /* Light gray background */
    font-family: Arial, sans-serif; /* Standard font */
  }

  .container {
    max-width: 1000px; /* Adjusted max-width */
    margin: 0 auto; /* Centering the container */
    padding: 20px;
  }

  .profile-view {
    background-color: #ffffff; /* White background */
    padding: 40px;
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    width: 80%; /* Adjusted width */
    margin-left: auto; /* Auto margin to center */
    margin-right: 0; /* No margin on the right */
  }

  .profile-view h3 {
    text-align: center;
    color: #333333; /* Dark gray heading color */
    margin-bottom: 20px;
    font-size: 24px; /* Standard font size */
  }

  .profile-form {
    width: 100%;
    margin: auto;
  }

  .profile-field {
    margin-bottom: 20px; /* Standard margin */
  }

  .profile-field label {
    display: block;
    margin-bottom: 8px;
    color: #555555; /* Medium gray label color */
    font-size: 16px; /* Standard font size */
  }

  .profile-field input[type="text"] {
    width: 100%;
    padding: 10px; /* Standard padding */
    box-sizing: border-box;
    color: #333333; /* Dark gray font color */
    border: 1px solid #cccccc; /* Light gray border */
    border-radius: 5px; /* Slight border radius */
    transition: border-color 0.3s ease; /* Smooth transition */
  }

  .profile-field input[type="text"]:focus {
    border-color: #6c5ce7; /* Purple border on focus */
    outline: none;
  }

  .edit-btn {
    width: 100%;
    padding: 12px; /* Standard padding */
    border: none;
    border-radius: 5px; /* Slight border radius */
    background-color: #ff7f50; /* Orange button color */
    color: #ffffff; /* White font color */
    font-size: 18px; /* Standard font size */
    cursor: pointer;
    transition: background-color 0.3s ease; /* Smooth transition */
  }

  .edit-btn:hover {
    background-color: #ff6347; /* Darker orange on hover */
  }
</style>

<div class="container">
  <div class="profile-view">
    <h3>Platinum Profile</h3>

    <form id="profileForm" action="{{ url('platinumProfile/update') }}" method="post" class="profile-form">
      @csrf
      @method('PUT')

      <div class="profile-field">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ $data->r_name }}" readonly>
      </div>

      <div class="profile-field">
        <label for="gender">Gender</label>
        <input type="text" id="gender" name="r_gender" value="{{ $data->r_gender }}" readonly>
      </div>

      <div class="profile-field">
        <label for="religion">Religion</label>
        <input type="text" id="religion" name="r_religion" value="{{ $data->r_religion }}" readonly>
      </div>

      <div class="profile-field">
        <label for="phone">Phone</label>
        <input type="text" id="phone" name="r_phone_number" value="{{ $data->r_phone_number }}" readonly>
      </div>

      <div class="profile-field">
        <label for="facebook">Facebook</label>
        <input type="text" id="facebook" name="r_facebook" value="{{ $data->r_facebook }}" readonly>
      </div>

      <div class="profile-field">
        <label for="university">University</label>
        <input type="text" id="university" name="r_edu_institute" value="{{ $data->r_edu_institute }}" readonly>
      </div>

    </form>

    <a href="{{ url('platinumProfile/'.$data->r_profile_id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
  </div>
</div>


@endsection
