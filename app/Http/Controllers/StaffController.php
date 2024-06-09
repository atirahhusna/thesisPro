<?php

namespace App\Http\Controllers;
use App\Models\register_profiles;
use App\Models\crmp;
use App\Models\staff;
use App\Models\Mentor;
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
        $query = register_profiles::select('*', \DB::raw("CASE WHEN r_mark IS NULL THEN 'No Value' ELSE r_mark END AS r_mark_display"))
        ->whereNull('r_mark');
    
        // Apply search filters if the search keyword is present
        if ($request->has('katakunci') && !empty($request->katakunci)) {
            $query->where(function ($subQuery) use ($request) {
                $subQuery->where('r_profile_id', 'like', '%' . $request->katakunci . '%')
                         ->orWhere('r_name', 'like', '%' . $request->katakunci . '%');
            });
        }

    // Get the filtered results
    $profiles = $query->get();

        return view('ProgressMonitoring.AssignPlatinum', compact('profiles'));
    }

    public function storePlatinum(Request $request)
    {
        // Find the profile by ID
        $request->validate([
            'r_profile_id' => 'required|exists:register_profiles,r_profile_id',
        ]);
    
        $registerProfile = register_profiles::findOrFail($request->r_profile_id);
    
        // Assuming the crmp_id follows a specific format
        $crmpId = 'CR' . str_pad($registerProfile->r_profile_id, 5, '0', STR_PAD_LEFT);
    
        // Determine the next r_mark value
        $highestMark = register_profiles::where('r_mark', 'LIKE', 'CRMP%')
                                      ->orderByRaw('LENGTH(r_mark) DESC')
                                      ->orderBy('r_mark', 'DESC')
                                      ->value('r_mark');
    
        if ($highestMark) {
            $currentNumber = intval(str_replace('CRMP', '', $highestMark));
            $nextNumber = $currentNumber + 1;
        } else {
            $nextNumber = 1;
        }
        $nextRMark = 'CRMP' . $nextNumber;
    
        // Create a new CRMP entry
        $crmp = CRMP::firstOrCreate(['crmp_id' => $crmpId], [
            'crmp_name' => 'Example Name', // Set other CRMP attributes as necessary
        ]);
    
        // Update the register profile with the new CRMP ID and mark
        $registerProfile->crmp_id = $crmpId; // Use $crmpId directly here
        $registerProfile->r_mark = $nextRMark;
        $registerProfile->save();
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'CRMP assigned successfully with ' . $nextRMark);
    }
    

    public function assignCRMP(Request $request)
    {
        // Fetch users marked as CRMP
        $crmpsQuery = register_profiles::whereNotNull('r_mark');
    
        // Apply search filters if the search keyword is present
        if ($request->has('katakunci') && !empty($request->katakunci)) {
            $crmpsQuery->where(function ($subQuery) use ($request) {
                $subQuery->where('r_profile_id', 'like', '%' . $request->katakunci . '%')
                         ->orWhere('r_name', 'like', '%' . $request->katakunci . '%')
                         ->orWhere('r_mark', 'like', '%' . $request->katakunci . '%');
            });
        }
    
        // Get the CRMPs
        $crmps = $crmpsQuery->get();
    
        // Fetch other profiles (excluding CRMPs)
        $profilesQuery = register_profiles::whereNull('r_mark');
    
        // Apply search filters if the search keyword is present
        if ($request->has('katakunci') && !empty($request->katakunci)) {
            $profilesQuery->where(function ($subQuery) use ($request) {
                $subQuery->where('r_profile_id', 'like', '%' . $request->katakunci . '%')
                         ->orWhere('r_name', 'like', '%' . $request->katakunci . '%');
            });
        }
    
        // Get the other profiles (excluding CRMPs)
        $profiles = $profilesQuery->get();
    
        return view('ProgressMonitoring.AssignCRMP', compact('profiles', 'crmps'));
    }

    public function storeCRMP(Request $request)
    {
        // Get the CRMP and check if it exists
        $crmp = crmp::find($request->selected_crmp_profile_id);
    
        // Get the selected Platinum users
        $selectedPlatinumIds = $request->input('selected_platinum'); // Access as an array
    
        // Check if $selectedPlatinumIds is an array
        if (!is_array($selectedPlatinumIds)) {
            return redirect()->back()->with('error', 'Invalid selected Platinum IDs.');
        }
    
        // Assign Platinum users to the CRMP
        foreach ($selectedPlatinumIds as $platinumId) {
            $platinum = register_profiles::find($platinumId);
            if ($platinum) {
                // Assign the Platinum user to the CRMP and set r_mark
                $platinum->r_profile_id = $crmp->r_profile_id;
                $platinum->r_mark = $crmp->r_mark; // Set r_mark same as CRMP's r_mark
                $platinum->save();
            }
        }
    
        return redirect()->back()->with('success', 'Platinum users assigned to CRMP successfully.');
    }

    public function showProfile()
{
    // Get the staff ID from the session
    $staffId = session('staff');

    // Debug: Check if staff ID is retrieved correctly from the session
    if (!$staffId) {
        return redirect()->back()->with('error', 'Staff ID not found in session.');
    }

    // Retrieve the staff data from the database
    $data = staff::where('staff_id', $staffId)->first();

    // Debug: Check if staff data is retrieved correctly
    if (!$data) {
        return redirect()->back()->with('error', 'User not found.');
    }

    // Pass the data to the view
    return view('userprofile.staff.StaffProfileIndex', ['data' => $data]);
}

public function update(Request $request)
{
    // Get the staff ID from the session
    $staffId = session('staff');

    // Debug: Check if staff ID is retrieved correctly from the session
    if (!$staffId) {
        return redirect()->back()->with('error', 'Staff ID not found in session.');
    }

    // Retrieve the staff data from the database
    $data = staff::where('staff_id', $staffId)->first();

    if (!$data) {
        return redirect()->back()->with('error', 'User not found.');
    }

    // Update the profile
    $data->update($request->all());

    // Set success message
    return redirect()->route('StaffProfile')->with('message', ['type' => 'success', 'text' => 'Profile updated successfully.']);
}

public function edit(string $staffId)
{
    $data = staff::where('staff_id', $staffId)->first();
    return view('userprofile.staff.StaffProfileEdit')->with('data', $data);
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
    return view('userprofile.staff.mentorProfile', ['data' => $data]);
}


}
