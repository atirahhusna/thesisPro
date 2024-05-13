<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeeklyFocusController extends Controller
{
    public function weeklyPage()
    {
        return view('ProgressMonitoring.WeeklyFocus');
    }
}
