
@extends('Header.platinum')
@section('content')

    <!--START-->
<div id="content">
    <div id="add">
    <h3>Add a New Publication</h3>
  
  <form action='{{ url('publication') }}'  method="post">
      @csrf
      <p style="padding-left:40px;" >{{ $platinum_id}} </p>
    <table class="center">
  
      <tr>
  
        <td class="column">
        <p style="margin-bottom:5px;">Title</p>
        <input type="text" id="title" name="title" placeholder="Enter publication title"  class="input-width" required>
        <p style="margin-bottom:5px;">DOI</p>
        <input type="text" id="DOI"  name="DOI" placeholder="Enter DOI" required>
        <p style="margin-bottom:5px;">Abstract</p>
        <textarea id="abstract" name="abstract" style="height: 200px; width: 100%;" placeholder="Enter publication abstract"></textarea>
        </td>
  
        <td class="column">
        <p style="margin-bottom:5px;">Publication Date</p>
        <input type="date" id="date" name="date" placeholder="Enter publication date"  required>
        <p style="margin-bottom:5px;">Authors</p>
        <input type="text" id="authors" name="authors" placeholder="Enter publication authors"  required>
        <p style="margin-bottom:5px;">Institution/Affiliation</p>
        <select type="option" id="institution" name="institution" required>
          <option value="">Select institution</option>
          <option value="Universiti Islam Antarabangsa Malaysia (UIAM)">Universiti Islam Antarabangsa Malaysia (UIAM)</option>
          <option value="Universiti Kebangsaan Malaysia (UKM)">Universiti Kebangsaan Malaysia (UKM)</option>
          <option value="Universiti Malaysia Kelantan (UMK)">Universiti Malaysia Kelantan (UMK)</option>
          <option value="Universiti Malaysia Pahang Al-Sultan Abdullah (UMPSA)">Universiti Malaysia Pahang Al-Sultan Abdullah (UMPSA)</option>
          <option value="Universiti Malaysia Perlis (UniMAP)">Universiti Malaysia Perlis (UniMAP)</option>
          <option value="Universiti Malaysia Sabah (UMS)">Universiti Malaysia Sabah (UMS)</option>
          <option value="Universiti Malaysia Sarawak (UNIMAS)">Universiti Malaysia Sarawak (UNIMAS)</option>
          <option value="Universiti Malaysia Terengganu (UMT)">Universiti Malaysia Terengganu (UMT)</option>
          <option value="Universiti Malaya (UM)">Universiti Malaya (UM)</option>
          <option value="Universiti Pertahanan Nasional Malaysia (UPNM)">Universiti Pertahanan Nasional Malaysia (UPNM)</option>
          <option value="Universiti Putra Malaysia (UPM)">Universiti Putra Malaysia (UPM)</option>
          <option value="Universiti Sains Islam Malaysia (USIM)">Universiti Sains Islam Malaysia (USIM)</option>
          <option value="Universiti Sains Malaysia (USM)">Universiti Sains Malaysia (USM)</option>
          <option value="Universiti Teknikal Malaysia Melaka (UTeM)">Universiti Teknikal Malaysia Melaka (UTeM)</option>
          <option value="Universiti Teknologi MARA (UiTM)">Universiti Teknologi MARA (UiTM)</option>
          <option value="Universiti Teknologi Malaysia (UTM)">Universiti Teknologi Malaysia (UTM)</option>
          <option value="Universiti Tun Hussein Onn Malaysia (UTHM)">Universiti Tun Hussein Onn Malaysia (UTHM)</option>
          <option value="Universiti Utara Malaysia (UUM)">Universiti Utara Malaysia (UUM)</option>
          <option value="Sultan Zainal Abidin (UniSZA)">Sultan Zainal Abidin (UniSZA)</option>
          <option value="Universiti Pendidikan Sultan Idris (UPSI)">Universiti Pendidikan Sultan Idris (UPSI)</option>
      </select>
        <p style="margin-bottom:5px;">Publication Types</p>
        <select type="option" id="type" name="type" required>
          <option value="">Select publication type</option>
          <option value="Article">Article</option>
          <option value="Case Studies">Case Studies</option>
          <option value="Journal">Journal</option>
          <option value="Review">Review</option>
          <option value="Thesis">Thesis</option>
          <!-- Add more options as needed -->
      </select>
        </td>
  
        <td>
        <div id="upload">
        <img src="{{ URL('images/upload.jpg') }}" alt="upload" width="80" height="80" >
        <p style="color:black;" >Drag file to upload</p>
        </div>
        <div class="button-container">
            <button type="reset">Reset</button>
            <button type="submit">Submit</button>
          
        </div>
        
  
        </td>
  
      </tr>
  
    </table>
      </form>
    </div>
  
    <div id="viewSearchDelete">
      <h3>My Publications</h3>
  
      <div>
          <table class="center">
              <tr>
                  <th style="font-size:20px;width:1150px;text-align:center;padding-left:30px;">Title</th>
                  <th style="font-size:20px;width:100px;text-align:center;">Year</th>
                  <th style="font-size:20px;width:300px;text-align:center;">Action</th>
              </tr>
  
              @foreach ($data as $index => $publication)
              <tr class="{{ $index % 2 == 0 ? 'even-row-publication' : 'odd-row-publication' }}">
                  <td style="text-align:left;padding-left:30px;" >{{ $publication->publication_title}}<br>
                  {{ $publication->publication_authors}}<br>
                  {{ $publication->publication_institution}}
                  </td>
                  <td style="text-align:center;"> {{ \Carbon\Carbon::parse($publication->publication_date)->format('Y') }}
                  </td></td>
                  <td>
                      <div class="button-container-delete-edit-view">
                          <form onsubmit="return confirm('Are you sure you want to delete this publication?')" action="{{ url('publication/'.$publication->publication_ID) }}" method="post">
                              @csrf
                              @method('DELETE')
                              <button type="delete" name="delete" >Delete</button>
                          </form>
  
                          <a href="{{ url('publication/'.$publication->publication_ID.'/edit') }}" method="GET">
                              <button type="edit">Edit</button>
                          </a>
                          <a href="{{ url('publication/'.$publication->publication_ID.'/show') }}" method="GET" >
                              <button type="view">View</button>
                          </a>
                      </div>             
                  </td>
              </tr>              
              @endforeach
             
          </table>
          
      </div>
    </div>
  
  </div>
  
  <!--AKHIR-->

@endsection





