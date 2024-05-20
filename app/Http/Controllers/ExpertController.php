<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpertController extends Controller
{
    public function SearchExpert(){
        return view('ExpertDomain.SearchExpert');
    }

    public function AddExpert(){
        return view('ExpertDomain.AddExpert');
    }
}
