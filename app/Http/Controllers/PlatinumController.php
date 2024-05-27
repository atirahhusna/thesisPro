<?php

namespace App\Http\Controllers;
use App\Models\RegisterProfile;

use Illuminate\Http\Request;

class PlatinumController extends Controller
{
    public function platinumPage()
    {
        return view('LandingPage.Platinum');
    }
    public function ProfileShow()
    {
        return view('userprofile.platinum');
    }
    public function showProfile(string $id)
    {
       $user = RegisterProfile::where('r_profileID',$id)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        return view('userProfile.platinum')->with('user', $user);
    }
    
}
