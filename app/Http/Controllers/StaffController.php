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

    public function show(string $id)
    {
        $data = register_profiles::where('r_profile_id', $id)->first();
        return view('userProfile.staff.platinumProfile')->with('data', $data);
    }

    public function profileView(Request $request)
    {
        $search = $request->input('search');
        
        // If there is a search query, filter the users
        if ($search) {
            $users = register_profiles::where('r_identity_card', 'LIKE', "%$search%")
                          ->orWhere('r_name', 'LIKE', "%$search%")
                          ->get();
        } else {
            // Otherwise, get all users
            $users = register_profiles::all();
        }

        return view('userProfile.Staff.ProfileList')->with('users',$users);
    }



}
