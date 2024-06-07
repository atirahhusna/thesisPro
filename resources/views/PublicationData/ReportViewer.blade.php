@extends('Header.mentor')
@section('content')


<style>
    .container-filter {
        height: auto;
    }
    table {
        width: 100%;
    }
    td {
        padding: 10px 0; /* Add padding to all table cells */
    }
    tr:last-child td {
        padding-bottom: 40px; /* Add extra padding to the last row */
    }
</style>

  <!--START-->
      <div class="container-filter ">
          <h2>Filter Publications</h2>

          <form method ="get">
            @csrf
            <div style="display: flex; align-items: center;">
              <input style="width:500px;height:50px;margin-right:20px;" type="text" id="search" name="keywords" value="{{Request::get('keywords') }}" placeholder="Enter title">
              <select style="width:500px;height:50px;margin-right:20px;" id="filter-institution" name="institutionKeywords">
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
                  <input style="width:150px;height:50px;margin-right:20px;" type="text" id="filter-year" name="yearKeywords" value="{{ Request::get('yearKeywords') }}" placeholder="Enter year">

              <div class="button-container-filter">
                  <button  style="height:40px;" type="submit" formaction="{{ url('publicationReport') }}">Search</button>
              </div>

                <div class="button-container-filter">
                    <button style="height:40px;" type="submit"  formaction="{{ url('generatePdf') }}" formmethod="post">DOWNLOAD</button>
                </div>
            </div>
        </form>

        <div>
          <table style="margin-top:20px;" >
              <tr>
                  <th style="width:1150px;color:white;">TITLE</th>
                  <th style="width:100px;color:white;">YEAR</th>
                  <!--th style="width:100px;color:white;">ACTION</th-->
              </tr>

              @foreach ($data as $publication)
              <tr >
                  <td style="color:white;padding-top:20px;">
                      {{ $publication->publication_title}}<br>
                      {{ $publication->publication_authors}}<br>
                      {{ $publication->publication_institution}}

                  </td>

                  <td style="color:white;">
                      {{ \Carbon\Carbon::parse($publication->publication_date)->format('Y') }}
                  </td>
                  </td>
      
                  <!--td>
                      <div class="button-container-view">
                          <a href="{{ url('publication/'.$publication->publication_ID.'/show') }}" method="GET" >
                              <button type="view">View</button>
                          </a>
                      </div>             
                  </td-->
              </tr>
              <tr>
                  <td colspan="3">
                      <hr style="border: 1px solid #3c1361;" >
                  </td>
              </tr>              
              @endforeach
          </table>
          
       </div>
    </div>
  <!--AKHIR-->
  @endsection