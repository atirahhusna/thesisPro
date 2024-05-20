@extends('Header.platinum')
@section('content')

<!--START-->
<div id="content">
  <div id="edit">
    <h3>Edit Publications</h3>
  
    <form id="editForm" action="{{ url('publication/'.$data->publication_ID)}}" method="post">
      @csrf
      <table class="center">
        @method('PUT')
        <tr>
  
          <td class="column">
            <p style="margin-bottom:5px;">Publication ID</p>
            {{ $data->publication_ID}}
            <p style="margin-bottom:5px;">Title</p>
            <input type="text" id="edit-title" name="title" placeholder="Enter publication title" class="input-width" value="{{ $data->publication_title}}" required>
            <p style="margin-bottom:5px;">DOI</p>
            <input type="text" id="edit-DOI" name="DOI" placeholder="Enter DOI" value="{{ $data->publication_DOI}}" required>
            <p style="margin-bottom:5px;">Abstract</p>
            <<input type="text" id="edit-abstract" name="abstract" placeholder="Enter publication abstract" style="height: 200px;" value="{{ $data->publication_abstract}}">
          </td>
  
          <td class="column">
            <p style="margin-bottom:5px;">Keywords</p>
            <input type="text" id="edit-keywords" name="keywords" placeholder="Enter publication keywords" value="{{ $data->publication_keywords}}" required>
            <p style="margin-bottom:5px;">Authors</p>
            <input type="text" id="edit-authors" name="authors" placeholder="Enter publication authors" value="{{ $data->publication_authors}}" required>
            <p style="margin-bottom:5px;">Institution/Affiliation</p>
            <input type="text" id="edit-institution" name="institution" placeholder="Enter publication institution" value="{{ $data->publication_institution}}"required>
            <p style="margin-bottom:5px;">Publication Types</p>
            <input type="text" id="edit-types" name="types" placeholder="Enter publication types" value="{{ $data->publication_types}}" required>
          </td>
  
          <td>
            <div id="upload">
              <img src="{{ URL('images/upload.jpg') }}" alt="upload" width="80" height="80">
              <p style="color:black;">Drag file to upload</p>
            </div>
            <div class="button-container">
              <button type="submit">Submit</button>
            </div>
  
          </td>
  
        </tr>
  
      </table>
    </form>
  
  </div>

</div>
<!--START-->

<table class="center" style="margin: 0 auto;">
  <tr>
    <td class="column" style="text-align: center;">
      <img src="{{ URL('images/logo.jpg') }}" alt="logo" width="150" height="150">
    </td>
    <td style="width: 800px; text-align: justify;">
      <p>THESISPRO is a premier academic platform designed to support postgraduate students in managing and showcasing their scholarly work. Our system offers a comprehensive suite of tools for editing, publishing, and sharing research and publications within expert domains. By facilitating seamless interactions among students, mentors, and staff, THESISPRO aims to enhance academic collaboration and promote excellence in research and education.</p>
    </td>
  </tr>
</table>
<hr>
<p style="text-align:center;">Copyright &copy; 2024 THESISPRO Corporation. All Rights Reserved.</p>
        </div>
    </div>
    
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
