<?php

namespace App\Http\Controllers;
use App\Models\register_profiles;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function StaffPage()
    {
        return view('LandingPage.staff');
    }

    public function profileList()
    {
        $users = register_profiles::all();
        return view('userProfile.profileList', ['users'=>$users]);
    }
    public function show(string $id)
    {
        $data = register_profiles::where('r_profile_id', $id)->first();
        return view('PublicationData.viewMyPublication')->with('data', $data);
    }

}
