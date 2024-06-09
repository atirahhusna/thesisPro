<?php

namespace App\Http\Controllers;
use App\Models\register_profiles;
use App\Models\Mentor;

use Illuminate\Http\Request;

class PlatinumController extends Controller
{

    public function platinumPage()
    {
        return view('LandingPage.Platinum');
    }
    
    public function show()
    {
        $platinumProfile = session('platinum');
    
        if (!$platinumProfile || !isset($platinumProfile['r_profile_id'])) {
            return redirect()->back()->with('error', 'Profile ID not found in session.');
        }
    
        $id = $platinumProfile['r_profile_id'];
        $data = register_profiles::where('r_profile_id', $id)->first(); // Fetch the data
    
        if (!$data) {
            return redirect()->back()->with('error', 'User not found.');
        }
    
        // Pass the data to the view
        return view('userprofile.platinum.PlatinumProfileIndex', ['data' => $data]);
    }
    public function update(Request $request)
    {
        $platinumProfile = session('platinum');
    
        if (!$platinumProfile || !isset($platinumProfile['r_profile_id'])) {
            return redirect()->back()->with('error', 'Profile ID not found in session.');
        }
    
        $id = $platinumProfile['r_profile_id'];
        $data = register_profiles::where('r_profile_id', $id)->first();
    
        if (!$data) {
            return redirect()->back()->with('error', 'User not found.');
        }
    
        // Update the profile
        $data->update($request->all());
    
        // Set success message
        return redirect()->route('platinumProfile')->with('message', ['type' => 'success', 'text' => 'Profile updated successfully.']);
    }
    
    public function edit(string $id)
    {
        $data = register_profiles::where('r_profile_id', $id)->first();
        return view('userprofile.platinum.PlatinumProfileEdit')->with('data', $data);
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

        return view('userprofile.Platinum.platinumList')->with('users',$users);
    }

    public function showPlatinum(string $id)
    {
        $data = register_profiles::where('r_profile_id', $id)->first();
        return view('userprofile.Platinum.platinumProfile')->with('data', $data);
    }

    public function mentorProfile()
{
    // Get the staff ID from the session
    $mentorId = session('mentor');

    // Debug: Check if staff ID is retrieved correctly from the session
    if (!$mentorId) {
        return redirect()->back()->with('error', 'mentor ID not found in session.');
    }

    // Retrieve the staff data from the database
    $data = Mentor::where('mentor_id', $mentorId)->first();

    // Debug: Check if staff data is retrieved correctly
    if (!$data) {
        return redirect()->back()->with('error', 'User not found.');
    }

    // Pass the data to the view
    return view('userprofile.platinum.mentorProfile', ['data' => $data]);
}
  

}
