<?php

namespace App\Http\Controllers;
use App\Models\register_profiles;

use Illuminate\Http\Request;

class PlatinumController extends Controller
{
    public function platinumPage()
    {
        return view('LandingPage.Platinum');
    }
    public function ProfileShow(string $id)
    {
        return view('userprofile.platinum');
    }
    public function show(string $id)
    {
       $user = register_profiles::where('r_profile_id',$id)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        return view('userProfile.platinum')->with('user', $user);
    }
    
    public function edit(string $id)
    {
        $data = register_profiles::where('r_profile_id', $id)->first();
        return view('userProfile.platinum')->with('data', $data);
    }
}
