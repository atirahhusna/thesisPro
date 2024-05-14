<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DraftController extends Controller
{
    public function draftPage(){
        return view('ProgressMonitoring.DraftThesisPerformance');
    }
}
