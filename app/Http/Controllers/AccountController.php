<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterProfile;
use App\Models\Staff;
use App\Models\CRMP;
use App\Models\Mentor;
use App\Models\Platinum;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\userProfile;

class RegisterController extends Controller
{
    public function user()
    {
        return view('Registration.userRegister');
    }

    public function registerForm()
    {
        return view('Registration.Register');
    }

    public function userPost(Request $request)
    {
        // Validation
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'role' => 'required'
            // Add more validation rules as needed for other fields
        ]);

        DB::beginTransaction();
        try {
            $userProfile = new userProfile(); // Corrected capitalization of "UserProfile"
            $userProfile->password = bcrypt($request->password);
            $userProfile->role = $request->role;
            $userProfile->email = $request->username; // Assuming the email is the same as the username
            $userProfile->save();

            DB::commit();

            // Redirect with success message
            return redirect()->route('user')->with('success', 'Registration successful!');
        } catch (\Exception $e) {
            // Log the error
            DB::rollback();
            Log::error('Staff registration failed: ' . $e->getMessage());
            // Redirect with error message
            return redirect()->route('user')->with('error', 'Registration failed! Please try again.');
        }
    }

    public function registerPost(Request $request)
    {
        // Validation
        $request->validate([
            'Title' => 'required|max:30',
            'name' => 'required|max:30',
            'password' => 'required|max:30',
            'identityCard' => 'required|numeric',
            'gender' => 'required',
            'religion' => 'required|min:5|max:12',
            'race' => 'required',
            'citizenship' => 'required|max:15',
            'address' => 'required|max:100',
            'phoneNumber' => 'required|numeric',
            'facebook' => 'required|max:20',
            'email' => 'required|email|max:50',
            'currentEduLevel' => 'required',
            'eduField' => 'required|max:30',
            'eduInstitute' => 'required|max:30',
            'occupation' => 'required|max:30',
            'sponsor' => 'required|max:30',
            'program' => 'required',
            'size' => 'required',
            'batch' => 'required|max:10',
        ]);

        DB::beginTransaction();
        try {
            // Create and save the Staff instance
            $staff = new Staff();
            $staff->staff_id = $request->ic;
            $staff->name = $request->name;
            $staff->address = $request->address;
            $staff->phone_number = $request->phone_number;
            $staff->username = $request->email;
            $staff->mentor_id = $request->ic;
            $staff->save();

            // Create and save the CRMP instance
            $crmp = new CRMP();
            $crmp->crmp_ID = $request->crmp_ID;
            $crmp->crmp_Education = $request->crmp_Education;
            $crmp->crmp_Expertise = $request->crmp_Expertise;
            $crmp->crmp_Teaching = $request->crmp_Teaching;
            $crmp->crmp_Biography = $request->crmp_Biography;
            $crmp->crmp_Name = $request->crmp_Name;
            $crmp->username = $request->email;
            $crmp->password = $request->password;
            $crmp->save();

            // Create and save the Mentor instance
            $mentor = new Mentor();
            $mentor->mentor_id = $request->ic;
            $mentor->name = $request->name;
            $mentor->education_level = $request->currentEduLevel;
            $mentor->position = $request->position;
            $mentor->experience = $request->experience;
            $mentor->phone_number = $request->phoneNumber;
            $mentor->username = $request->email;
            $mentor->save();

            // Create and save the Platinum instance
            $platinum = new Platinum();
            $platinum->plat_id = $request->ic;
            $platinum->crmp_id = $request->id;
            $platinum->staff_id = $request->id;
            $platinum->username = $request->email;
            $platinum->save();

            // Create and save the RegisterProfile instance
            $registerProfile = new RegisterProfile();
            $registerProfile->title = $request->Title;
            $registerProfile->name = $request->name; // Corrected duplicated assignment
            $registerProfile->password = bcrypt($request->password);
            $registerProfile->identity_card = $request->identityCard;
            $registerProfile->gender = $request->gender;
            $registerProfile->religion = $request->religion;
            $registerProfile->race = $request->race;
            $registerProfile->citizenship = $request->citizenship;
            $registerProfile->address = $request->address;
            $registerProfile->phone_number = $request->phoneNumber;
            $registerProfile->facebook = $request->facebook;
            $registerProfile->email = $request->email;
            $registerProfile->current_edu_level = $request->currentEduLevel;
            $registerProfile->edu_field = $request->eduField;
            $registerProfile->edu_institute = $request->eduInstitute;
            $registerProfile->occupation = $request->occupation;
            $registerProfile->sponsor = $request->sponsor;
            $registerProfile->program = $request->program;
            $registerProfile->size = $request->size;
            $registerProfile->batch = $request->batch;
            $registerProfile->save();

            DB::commit();

            // Redirect with success message
            return redirect()->route('registerForm')->with('success', 'Registration successful!');
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Registration failed: ' . $e->getMessage());
            return redirect()->route('registerForm')->with('error', 'Registration failed! Please try again.');
        }
    }

    public function LoginPost(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $role = $request->input('role');

        $authenticated = false;
        $user = null;

        if ($role == 'staff') {
            $user = Staff::where('staff_id',$username)->first();
            $authenticated = $this->manualStaffAuth($username, $password);
        } elseif ($role == 'mentor') {
            $user = Mentor::where('mentor_id', $username)->first();
            $authenticated = $this->manualMentorAuth($username, $password);
        } elseif ($role == 'platinum') {
            $user = Platinum::where('plat_id', $username)->first();
            $authenticated = $this->manualPlatinumAuth($username, $password);
        }

        if ($authenticated && $user) {
            $this->manualLogin($role, $user);

            if ($this->manualCheck($role)) {
                if ($role == 'staff') {
                    return redirect()->route('StaffPage');
                } elseif ($role == 'mentor') {
                    return redirect()->route('MentorPage');
                } elseif ($role == 'platinum') {
                    return redirect()->route('PlatinumPage');
                }
            }
        }

        return redirect()->back()->withErrors(['Invalid credentials']);
    }

    private function manualStaffAuth($username, $password)
    {
        $user = Staff::where('staff_id', $username)->first();
        return $user && Hash::check($password, $user->s_password);
    }

    private function manualMentorAuth($username, $password)
    {
        $user = Mentor::where('mentor_id', $username)->first();
        return $user && Hash::check($password, $user->m_password);
    }

    private function manualPlatinumAuth($username, $password)
    {
        $user = Platinum::where('plat_id', $username)->first();
        return $user && Hash::check($password, $user->p_password);
    }

    private function manualLogin($role, $user)
    {
        if ($role == 'staff') {
            session(['staff' => $user->staff_id]);
        } elseif ($role == 'mentor') {
            session(['mentor' => $user->mentor_id]);
        } elseif ($role == 'platinum') {
            session(['platinum' => $user->plat_id]);
        }
    }

    private function manualCheck($role)
    {
        if ($role == 'staff') {
            return session()->has('staff');
        } elseif ($role == 'mentor') {
            return session()->has('mentor');
        } elseif ($role == 'platinum') {
            return session()->has('platinum');
        }

        return false;
    }

    public function Login()
    {
        return view('LandingPage.Login');
    }

    public function ForgotPassword()
    {
        return view('Landingpage.ForgotPassword');
    }
}

