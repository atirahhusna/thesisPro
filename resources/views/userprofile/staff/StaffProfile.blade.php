@extends('Header.staff')

@section('content')

<style>
  body {
    background-color: #f4f4f4; /* Light gray background */
    font-family: Arial, sans-serif; /* Standard font */
  }

  .alert {
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid transparent;
  border-radius: 4px;
  width: 100%; /* Adjust the width here */
  opacity: 1; /* Initial opacity */
    transition: opacity 0.5s ease; /* Smooth transition */
  }

  .alert.hide {
    opacity: 0; /* Hide the message */
  }
.alert-success {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}


  .container {
    max-width: 1000px; /* Adjusted max-width */
    margin: 0 auto; /* Centering the container */
    padding: 10px;
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

  .profile-view {
  background-color: #ffffff; /* White background */
  padding: 40px;
  border-radius: 10px; /* Rounded corners */
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
  width: 80%; /* Adjusted width */
  margin: 0 auto; /* Center the container */
  display: flex; /* Use flexbox */
  flex-direction: column; /* Stack elements vertically */
  align-items: center; /* Center items horizontally */
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
    width: 700px;
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
  width: 100%; /* Make the button wider */
  padding: 12px; /* Standard padding */
  border: none;
  border-radius: 5px; /* Slight border radius */
  background-color: #000000; /* Change button color to black */
  color: #ffffff; /* White font color */
  font-size: 18px; /* Standard font size */
  cursor: pointer;
  transition: background-color 0.3s ease; /* Smooth transition */
  text-align: center;
}

.edit-btn:hover {
  background-color: #333333; /* Darker color on hover */
}
.profile-view h3 {
    color: black; /* Set the color of h3 to white */
}


</style>

<div class="container">
  <div class="profile-view">
  <h3>Platinum Profile</h3>
  @if(session('message'))
    <div class="alert alert-{{ session('message')['type'] }}">
        {{ session('message')['text'] }}
    </div>
@endif

<div class="profile-field">
    <label for="name">Staff Name</label>
    <input type="text" id="name" name="s_name" value="{{ $data->s_name }}" readonly>
</div>
<div class="profile-field">
    <label for="name">Email</label>
    <input type="text" id="name" name="email" value="{{ $data->email }}" readonly>
</div>

<div class="profile-field">
    <label for="address">Address</label>
    <input type="text" id="address" name="s_address" value="{{ $data->s_address }}" readonly>
</div>

<div class="profile-field">
    <label for="phone">Phone</label>
    <input type="text" id="phone" name="s_phone_number" value="{{ $data->s_phone_number }}" readonly>
</div>


    <a href="{{ url('platinumProfile/'.$data->r_profile_id.'/edit') }}"  class="edit-btn">Edit</a>

  </div>
</div>
<script>
  setTimeout(function() {
    document.querySelector('.alert').style.display = 'none';
  }, 3000); // 10 seconds (5000 milliseconds)
</script>


@endsection
