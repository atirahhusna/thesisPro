<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function MentorPage()
    {
        return view('LandingPage.Mentor');
    }
}
