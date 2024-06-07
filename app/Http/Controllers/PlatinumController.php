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
   
    public function show()
    {
        $platinumProfile = session('platinum');

        if (!$platinumProfile || !isset($platinumProfile['r_profile_id'])) {
            return redirect()->back()->with('error', 'Profile ID not found in session.');
        }

        $id = $platinumProfile['r_profile_id'];
        $user = RegisterProfile::where('r_profile_id', $id)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        return view('userProfile.PlatinumProfileIndex', compact('user'));
    }

    public function update(Request $request)
    {
        $platinumProfile = session('platinum');

        if (!$platinumProfile || !isset($platinumProfile['r_profile_id'])) {
            return redirect()->back()->with('error', 'Profile ID not found in session.');
        }

        $id = $platinumProfile['r_profile_id'];
        $user = RegisterProfile::where('r_profile_id', $id)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $user->update($request->all());

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
