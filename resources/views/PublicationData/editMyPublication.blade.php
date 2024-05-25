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
            <textarea id="edit-abstract" name="abstract" style="height: 200px; width: 100%;" placeholder="Enter publication abstract">{{ $data->publication_abstract }}</textarea>
          </td>
  
          <td class="column">
            <p style="margin-bottom:5px;">Publication Date</p>
            <input type="date" id="edit-date" name="date" placeholder="Enter publication date" value="{{ $data->publication_date}}" required>
            <p style="margin-bottom:5px;">Authors</p>
            <input type="text" id="edit-authors" name="authors" placeholder="Enter publication authors" value="{{ $data->publication_authors}}" required>
            <p style="margin-bottom:5px;">Institution/Affiliation</p>
            <select type="option" id="edit-institution" name="institution" required>
              <option value="">Select institution</option>
              <option value="Universiti Islam Antarabangsa Malaysia (UIAM)" {{ $data->publication_institution === "Universiti Islam Antarabangsa Malaysia (UIAM)" ? 'selected' : '' }}>Universiti Islam Antarabangsa Malaysia (UIAM)</option>
              <option value="Universiti Kebangsaan Malaysia (UKM)" {{ $data->publication_institution === "Universiti Kebangsaan Malaysia (UKM)" ? 'selected' : '' }}>Universiti Kebangsaan Malaysia (UKM)</option>
              <option value="Universiti Malaysia Kelantan (UMK)" {{ $data->publication_institution === "Universiti Malaysia Kelantan (UMK)" ? 'selected' : '' }}>Universiti Malaysia Kelantan (UMK)</option>
              <option value="Universiti Malaysia Pahang Al-Sultan Abdullah (UMPSA)" {{ $data->publication_institution === "Universiti Malaysia Pahang Al-Sultan Abdullah (UMPSA)" ? 'selected' : '' }}>Universiti Malaysia Pahang Al-Sultan Abdullah (UMPSA)</option>
              <option value="Universiti Malaysia Perlis (UniMAP)" {{ $data->publication_institution === "Universiti Malaysia Perlis (UniMAP)" ? 'selected' : '' }}>Universiti Malaysia Perlis (UniMAP)</option>
              <option value="Universiti Malaysia Sabah (UMS)" {{ $data->publication_institution === "Universiti Malaysia Sabah (UMS)" ? 'selected' : '' }}>Universiti Malaysia Sabah (UMS)</option>
              <option value="Universiti Malaysia Sarawak (UNIMAS)" {{ $data->publication_institution === "Universiti Malaysia Sarawak (UNIMAS)" ? 'selected' : '' }}>Universiti Malaysia Sarawak (UNIMAS)</option>
              <option value="Universiti Malaysia Terengganu (UMT)" {{ $data->publication_institution === "Universiti Malaysia Terengganu (UMT)" ? 'selected' : '' }}>Universiti Malaysia Terengganu (UMT)</option>
              <option value="Universiti Malaya (UM)" {{ $data->publication_institution === "Universiti Malaya (UM)" ? 'selected' : '' }}>Universiti Malaya (UM)</option>
              <option value="Universiti Pertahanan Nasional Malaysia (UPNM)" {{ $data->publication_institution === "Universiti Pertahanan Nasional Malaysia (UPNM)" ? 'selected' : '' }}>Universiti Pertahanan Nasional Malaysia (UPNM)</option>
              <option value="Universiti Putra Malaysia (UPM)" {{ $data->publication_institution === "Universiti Putra Malaysia (UPM)" ? 'selected' : '' }}>Universiti Putra Malaysia (UPM)</option>
              <option value="Universiti Sains Islam Malaysia (USIM)" {{ $data->publication_institution === "Universiti Sains Islam Malaysia (USIM)" ? 'selected' : '' }}>Universiti Sains Islam Malaysia (USIM)</option>
              <option value="Universiti Sains Malaysia (USM)" {{ $data->publication_institution === "Universiti Sains Malaysia (USM)" ? 'selected' : '' }}>Universiti Sains Malaysia (USM)</option>
              <option value="Universiti Teknikal Malaysia Melaka (UTeM)" {{ $data->publication_institution === "Universiti Teknikal Malaysia Melaka (UTeM)" ? 'selected' : '' }}>Universiti Teknikal Malaysia Melaka (UTeM)</option>
              <option value="Universiti Teknologi MARA (UiTM)" {{ $data->publication_institution === "Universiti Teknologi MARA (UiTM)" ? 'selected' : '' }}>Universiti Teknologi MARA (UiTM)</option>
              <option value="Universiti Teknologi Malaysia (UTM)" {{ $data->publication_institution === "Universiti Teknologi Malaysia (UTM)" ? 'selected' : '' }}>Universiti Teknologi Malaysia (UTM)</option>
              <option value="Universiti Tun Hussein Onn Malaysia (UTHM)" {{ $data->publication_institution === "Universiti Tun Hussein Onn Malaysia (UTHM)" ? 'selected' : '' }}>Universiti Tun Hussein Onn Malaysia (UTHM)</option>
              <option value="Universiti Utara Malaysia (UUM)" {{ $data->publication_institution === "Universiti Utara Malaysia (UUM)" ? 'selected' : '' }}>Universiti Utara Malaysia (UUM)</option>
              <option value="Sultan Zainal Abidin (UniSZA)" {{ $data->publication_institution === "Sultan Zainal Abidin (UniSZA)" ? 'selected' : '' }}>Sultan Zainal Abidin (UniSZA)</option>
              <option value="Universiti Pendidikan Sultan Idris (UPSI)" {{ $data->publication_institution === "Universiti Pendidikan Sultan Idris (UPSI)" ? 'selected' : '' }}>Universiti Pendidikan Sultan Idris (UPSI)</option>
              
              <!-- Add more options for other institutions -->
          </select>

            <p style="margin-bottom:5px;">Publication Types</p>
              <select type="option" id="edit-types" name="types" required>
                <option value="">Select publication type</option>
                <option value="Article" {{ $data->publication_types === "Article" ? 'selected' : '' }}>Article</option>
                <option value="Case Studies" {{ $data->publication_types === "Case Studies" ? 'selected' : '' }}>Case Studies</option>
                <option value="Journal" {{ $data->publication_types === "Journal" ? 'selected' : '' }}>Journal</option>
                <option value="Review" {{ $data->publication_types === "Review" ? 'selected' : '' }}>Review</option>
                <option value="Thesis" {{ $data->publication_types === "Thesis" ? 'selected' : '' }}>Thesis</option>
                <!-- Add more options as needed -->
            </select>
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
