<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class platinumTemplateController extends Controller
{
    public function Template(){
        return view('MasterMenu.Platinum');
    }
}
