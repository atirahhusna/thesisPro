<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlatinumController extends Controller
{
    public function platinumPage()
    {
        return view('MainInterface.Platinum');
    }
}
