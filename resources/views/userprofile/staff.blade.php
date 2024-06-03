@extends('Header.staff')
@section('content')

<!--START-->
<div id="content">
  <div id="view">
    <h3>Platinum Profile</h3>
  
    <form id="profileForm" action="#" method="post">
      @csrf
      <h3 style="padding-left:0px;padding-right:20px;">Profile Details</h3>
      <table style="padding-right:20px;">
        
        <tr>
          <td style="padding-right:40px;" class="viewProfile">
            
            <p style="margin-bottom:5px;">Name:</p>
            <input type="text" id="name" name="name" value="{{ $user->name }}" readonly>
            <p style="margin-bottom:5px;">Email:</p>
            <input type="email" id="email" name="email" value="{{ $user->email }}" readonly>
            <p style="margin-bottom:5px;">Phone:</p>
            <input type="text" id="phone" name="phone" value="{{ $user->phone }}" readonly>
            <p style="margin-bottom:5px;">Address:</p>
            <input type="text" id="address" name="address" value="{{ $user->address }}" readonly>

            <div style="margin-left:0px;" id="upload">
              <img src="{{ URL('images/upload.jpg') }}" alt="upload" width="80" height="80">
              <p style="color:black;">Drag file to upload</p>
            </div>

          </td>
        </tr>
  
      </table>
      <button type="button" id="editBtn" class="btn-edit">Edit</button>
    </form>
  
  </div>
</div>
<!--END-->
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
<script>
    const hamBurger = document.querySelector(".toggle-btn");

    hamBurger.addEventListener("click", function () {
        document.querySelector("#sidebar").classList.toggle("expand");
    });

    document.getElementById('editBtn').addEventListener('click', function() {
        var inputs = document.querySelectorAll('input[type="text"], input[type="email"]');
        for (var i = 0; i < inputs.length; i++) {
            inputs[i].readOnly = false;
        }
        document.getElementById('editBtn').style.display = 'none';
        document.getElementById('saveBtn').style.display = 'block';
    });
</script>

@endsection
