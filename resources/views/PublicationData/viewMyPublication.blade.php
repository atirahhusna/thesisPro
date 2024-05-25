@extends('Header.platinum')
@section('content')

<!--START-->
<div id="content">
  <div id="view">
    <h3>View Publications</h3>
  
    <form  id="viewForm" action="{{ url('publication/'.$data->publication_ID)}}" method="post">
      @csrf
      <h3 style="padding-left:0px;padding-right:20px;" >{{ $data->publication_title}}</h3>
      <table style="padding-right:20px;" >
        @method('PUT')
        
        <tr>
  
          <td style="padding-right:40px;" class="viewPublication">
            
            <p style="margin-bottom:5px;">Publication ID:</p>
            {{ $data->publication_ID}}           
            <p style="margin-bottom:5px;">DOI:</p>
            {{ $data->publication_DOI}}
            <p style="margin-bottom:5px;">Abstract:</p>
            {{ $data->publication_abstract}}
            <p style="margin-bottom:5px;">Publication Date:</p>
            {{ $data->publication_date}}
            <p style="margin-bottom:5px;">Authors:</p>
            {{ $data->publication_authors}}
            <p style="margin-bottom:5px;">Institution/Affiliation:</p>
            {{ $data->publication_institution}}
            <p style="margin-bottom:5px;">Publication Types:</p>
            {{ $data->publication_types}}
            <div style="margin-left:0px;" id="upload">
              <img src="{{ URL('images/upload.jpg') }}" alt="upload" width="80" height="80">
              <p style="color:black;">Drag file to upload</p>
            </div>
  
          </td>
  
        </tr>
  
      </table>
    </form>
  
  </div>

</div>
<!--START-->

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script>
        const hamBurger = document.querySelector(".toggle-btn");

        hamBurger.addEventListener("click", function () {
            document.querySelector("#sidebar").classList.toggle("expand");
        });
    </script>
    </body>
    </html>

    @endsection
