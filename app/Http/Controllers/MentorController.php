<?php

namespace App\Http\Controllers;
use App\Models\register_profiles;
use App\Models\Mentor;
use App\Models\staff;


use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function MentorPage()
    {
        return view('LandingPage.Mentor');
    }

    public function show(string $id)
    {
        $data = register_profiles::where('r_profile_id', $id)->first();
        return view('userProfile.Mentor.platinumProfile')->with('data', $data);
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

        return view('userProfile.Mentor.profileList')->with('users',$users);
    }

       
        public function staffList(Request $request)
        {
            $search = $request->input('search');
            
            // If there is a search query, filter the users
            if ($search) {
                $users = staff::where('staff_id', 'LIKE', "%$search%")
                              ->orWhere('s_name', 'LIKE', "%$search%")
                              ->get();
            } else {
                // Otherwise, get all users
                $users = staff::all();
            }

        return view('userProfile.Mentor.staffList')->with('users',$users);
    }

    public function staffProfile(string $id)
    {
        $data = staff::where('staff_id', $id)->first();
        return view('userProfile.Mentor.staffProfile')->with('data', $data);
    }



    public function registerList ()
    {
        $users = register_profiles::all();
        return view('Registration.mentorView', ['users'=>$users]);
    }

    public function showProfile()
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
        return view('userprofile.mentor.MentorProfileIndex', ['data' => $data]);
    }
    
    public function update(Request $request)
    {
        // Get the staff ID from the session
        $mentorId = session('mentor');
    
        // Debug: Check if staff ID is retrieved correctly from the session
        if (!$mentorId) {
            return redirect()->back()->with('error', 'mentor ID not found in session.');
        }
    
        // Retrieve the staff data from the database
        $data = Mentor::where('mentor_id', $mentorId)->first();
    
        if (!$data) {
            return redirect()->back()->with('error', 'User not found.');
        }
    
        // Update the profile
        $data->update($request->all());
    
        // Set success message
        return redirect()->route('MentorProfile')->with('message', ['type' => 'success', 'text' => 'Profile updated successfully.']);
    }
    
    public function edit(string $mentorId)
    {
        $data = Mentor::where('mentor_id', $mentorId)->first();
        return view('userprofile.mentor.MentorProfileEdit')->with('data', $data);
    }
        
        


}
