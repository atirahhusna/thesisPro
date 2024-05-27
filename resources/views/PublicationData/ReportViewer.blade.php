@extends('Header.mentor')
@section('content')

  <!--START-->
      <div class="container-filter">
          <h2>Filter Publications</h2>

          <form action="{{ url('generatePdf') }}" method="post">
            @csrf
            <div style="display: flex; align-items: center;">
              <select style="width:500px;" id="filter-institution" name="institutionKeywords">
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
                <input style="width:200px;" type="text" id="filter-year" name="yearKeywords" value="{{ Request::get('yearKeywords') }}" placeholder="Enter year">
                <div class="button-container-filter">
                    <button style="height:40px;" type="submit">DOWNLOAD</button>
                </div>
            </div>
        </form>
      </div>
  <!--AKHIR-->
  @endsection