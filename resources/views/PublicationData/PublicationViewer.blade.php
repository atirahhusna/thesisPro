@extends('Header.platinum')
@section('content')            
            <div id="content">
            <div id ="view" >

            <table style="margin-bottom:50px;margin-left:10px;margin-right:10px;">

                <tr>
                    <td style="width:1800px;padding-left:50px;" >
                        <form action="{{ url('publicationViewer') }}" method ="get">
                            <div style="display: flex; align-items: center;">
                                <input style="width:1000px;height:40px;" type="search" id="search" name="keywords" value="{{Request::get('keywords') }}" placeholder="Enter keywords">
                                <div class="button-container">
                                    <button  style="margin-bottom:40px;height:40px;" type="submit">Search</button>
                                </div>
                            </div>
                        </form>

                        <div>
                            <table style="margin-top:20px;" >
                                <tr>
                                    <th style="width:1150px;color:white;">TITLE</th>
                                    <th style="width:100px;color:white;">YEAR</th>
                                    <th style="width:100px;color:white;">ACTION</th>
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
                        
                                    <td>
                                        <div class="button-container-view">
                                            <a href="{{ url('publication/'.$publication->publication_ID.'/show') }}" method="GET" >
                                                <button type="view">View</button>
                                            </a>
                                        </div>             
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <hr style="border: 1px solid #2B7A78;" >
                                    </td>
                                </tr>              
                                @endforeach
                            </table>
                        </div>


                                        
                    </td>

                </tr>



            </table>
        </div>


        @endsection
