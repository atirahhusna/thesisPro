
@extends('Header.platinum')
@section('content')

    <!--START-->
<div id="content">
    <div id="add">
    <h3>Add a New Publication</h3>
  
  <form action='{{ url('publication') }}'  method="post">
      @csrf
    <table class="center">
  
      <tr>
  
        <td class="column">
        <p style="margin-bottom:5px;">Publication ID</p>
        <input type="text" id="id" name="publicationid" placeholder="Enter publication ID"  class="input-width" required>
        @if ($errors->has('publicationid'))
          <div class="error-text-danger">{{ $errors->first('publicationid') }}
          </div>
          @endif
        <p style="margin-bottom:5px;">Title</p>
        <input type="text" id="title" name="title" placeholder="Enter publication title"  class="input-width" required>
        <p style="margin-bottom:5px;">DOI</p>
        <input type="text" id="DOI"  name="DOI" placeholder="Enter DOI" required>
        <p style="margin-bottom:5px;">Abstract</p>
        <input type="text" id="abstract" name="abstract" style="height: 200px;" placeholder="Enter publication abstract">  
        </td>
  
        <td class="column">
        <p style="margin-bottom:5px;">Keywords</p>
        <input type="text" id="keywords" name="keywords" placeholder="Enter publication keywords"  required>
        <p style="margin-bottom:5px;">Authors</p>
        <input type="text" id="authors" name="authors" placeholder="Enter publication authors"  required>
        <p style="margin-bottom:5px;">Institution/Affiliation</p>
        <input type="text" id="instituition" name="institution" placeholder="Enter publication instituition" required>
        <p style="margin-bottom:5px;">Publication Types</p>
        <input type="text" id="types" name="types" placeholder="Enter publication types" required>
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
  
      <div id="list">
          <table class="center">
              <tr>
                  <th style="width:300px">Publication ID</th>
                  <th style="width:500px">Title</th>
                  <th style="width:400px">Authors</th>
                  <th style="width:200px">Institutions</th>
                  <th style="width:100px">Types</th>
                  <th style="width:300px">Action</th>
              </tr>
  
              @foreach ($data as $publication)
              <tr>
                  <td>{{ $publication->publication_ID}}</td>
                  <td>{{ $publication->publication_title}}</td>
                  <td>{{ $publication->publication_authors}}</td>
                  <td>{{ $publication->publication_institution}}</td>
                  <td>{{ $publication->publication_types}}</td>
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
                          <a href="view-link-here" >
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





