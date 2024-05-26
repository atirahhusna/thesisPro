<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register_profiles;
use App\Models\Staff;
use App\Models\CRMP;
use App\Models\Mentor;
use App\Models\Platinum;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\user_profiles;

class AccountController extends Controller
{
    public function user()
    {
        return view('Registration.userRegister');
    }

    public function registerForm()
    {
        return view('Registration.Register');
    }
    public function registerList ()
    {
        $users = register_profiles::all();
        return view('Registration.Index', ['users'=>$users]);
    }
    public function edit(register_profiles $users)
    {
        return view('Registration.edit', ['users' =>$users]);
    }

    


    public function userPost(Request $request)
    {
        // Validation
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',
            'email' => 'required'
            // Add more validation rules as needed for other fields
        ]);

        try {
            $newUser = user_profiles::create($data);
            return redirect()->route('user')->with('success', 'User created successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create user: ' . $e->getMessage());
        }
    }

    public function registerPost(Request $request)
    {
        // Validation
        $data = $request->validate([
            'r_identity_card' =>'required',
            'r_gender'=>'required',
            'r_password'=>'required',
            'r_religion'=>'required',
            'r_race'=>'required',
            'r_citizenship'=>'required',
            'r_address'=>'required',
            'r_phone_number'=>'required',
            'r_facebook'=>'required',
            'r_current_edu_level'=>'required',
            'r_edu_field'=>'required',
            'r_edu_institute'=>'required',
            'r_occupation'=>'required',
            'r_sponsor'=>'required',
            'r_program'=>'required',
            'r_size'=>'required',
            'r_batch'=>'required',
            'r_name'=>'required'
        ]);

        try {
            $newPlatinum = register_profiles::create($data);
            // Redirect with success message
            return redirect()->route('registerForm')->with('success', 'Platinum registered successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to registered platinum: ' . $e->getMessage());
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
        }else{
            return redirect()->back()->withErrors(['Invalid credentials']);
        }

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
        return view('Login.Login');
    }

    public function ForgotPassword()
    {
        return view('Login.ForgotPassword');
    }

    
}

