<?php

namespace App\Http\Controllers;
use App\Models\register_profiles;
use App\Models\crmp;
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

    public function assignPlatinum(Request $request)
    {
        // Fetch the search keyword
        $profiles = register_profiles::all();
        if ($request->has('katakunci')) {
            $profiles = register_profiles::where('r_profile_id', 'like', '%' . $request->katakunci . '%')
                                       ->orWhere('r_name', 'like', '%' . $request->katakunci . '%')
                                       ->get();
        }
        return view('ProgressMonitoring.AssignPlatinum', compact('profiles'));
    }

    public function storePlatinum(Request $request, $id)
    {
        // Find the profile by ID
        $profile = register_profiles::findOrFail($id);

        // Create a new CRMP record
        $crmp = crmp::create([
            'crmp_education' => 'default education', // Add your default values
            'crmp_expertise' => 'default expertise',
            'crmp_teaching' => 'default teaching',
            'crmp_biography' => 'default biography',
            'crmp_name' => $request,
            'r_profile_id' => $profile->r_profile_id, // Associate the profile ID
        ]);


        // Redirect back with a success message
        return redirect()->back()->with('success', 'CRMP assigned successfully.');
    }

    public function assignCRMP(Request $request)
    {
        $profiles = register_profiles::all();
        if ($request->has('katakunci')) {
            $profiles = register_profiles::where('r_profile_id', 'like', '%' . $request->katakunci . '%')
                                       ->orWhere('r_name', 'like', '%' . $request->katakunci . '%')
                                       ->get();
        }
        return view('ProgressMonitoring.AssignCRMP', compact('profiles'));
    }
}
