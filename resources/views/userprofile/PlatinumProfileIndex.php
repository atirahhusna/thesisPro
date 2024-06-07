@extends('Header.platinum')
@section('content')

<div id="content" style="display: flex; justify-content: center; align-items: center; height: 100vh;">
  <div id="view" style="width: 50%; background-color: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <h3 style="text-align: center;">Platinum Profile</h3>
  
    <form id="profileForm" action="{{ url('platinumProfile/update') }}" method="post">
      @csrf
      @method('PUT')
      <h3 style="padding-left:0px;padding-right:20px; text-align: center;">Profile Details</h3>
      <table style="width: 100%; margin: auto;">
        <tr>
          <td style="padding-right:40px;" class="viewProfile">
            <div style="margin-bottom: 15px;">
              <label for="name" style="display: block; margin-bottom: 5px;">Name:</label>
              <input type="text" id="name" name="name" value="{{ $data->r_name }}" readonly style="width: 100%; padding: 8px; box-sizing: border-box;">
            </div>
            <div style="margin-bottom: 15px;">
              <label for="identity_card" style="display: block; margin-bottom: 5px;">Identity Card:</label>
              <input type="text" id="identity_card" name="r_identity_card" value="{{ $data->r_identity_card }}" readonly style="width: 100%; padding: 8px; box-sizing: border-box;">
            </div>
            <div style="margin-bottom: 15px;">
              <label for="gender" style="display: block; margin-bottom: 5px;">Gender:</label>
              <input type="text" id="gender" name="r_gender" value="{{ $data->r_gender }}" readonly style="width: 100%; padding: 8px; box-sizing: border-box;">
            </div>
            <div style="margin-bottom: 15px;">
              <label for="religion" style="display: block; margin-bottom: 5px;">Religion:</label>
              <input type="text" id="religion" name="r_religion" value="{{ $data->r_religion }}" readonly style="width: 100%; padding: 8px; box-sizing: border-box;">
            </div>
            <div style="margin-bottom: 15px;">
              <label for="phone" style="display: block; margin-bottom: 5px;">Phone:</label>
              <input type="text" id="phone" name="r_phone_number" value="{{ $data->r_phone_number }}" readonly style="width: 100%; padding: 8px; box-sizing: border-box;">
            </div>
            <div style="margin-bottom: 15px;">
              <label for="facebook" style="display: block; margin-bottom: 5px;">Facebook:</label>
              <input type="text" id="facebook" name="r_facebook" value="{{ $data->r_facebook }}" readonly style="width: 100%; padding: 8px; box-sizing: border-box;">
            </div>
            <div style="margin-bottom: 15px;">
              <label for="university" style="display: block; margin-bottom: 5px;">University:</label>
              <input type="text" id="university" name="r_edu_institute" value="{{ $data->r_edu_institute }}" readonly style="width: 100%; padding: 8px; box-sizing: border-box;">
            </div>
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>

@endsection
