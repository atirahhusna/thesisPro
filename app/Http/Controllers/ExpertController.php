<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
    public function SearchExpert() {
        return view('ExpertDomain.SearchExpert');
    }

    public function AddExpert() {
        return view('ExpertDomain.AddExpert');
    }

    public function EditExpert() {
        return view('ExpertDomain.EditExpert');
    }

    public function ViewExpert() {
        return view('ExpertDomain.ViewExpert');
    }

    public function edit()
    {
        // Your logic to handle the edit view
        return view('ExpertDomain.EditExpert');
    }
}

