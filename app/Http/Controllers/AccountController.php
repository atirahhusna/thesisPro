<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register_profiles;
use App\Models\staff;
use App\Models\CRMP;
use App\Models\Mentor;
use App\Models\Platinum;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\user_profiles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
     // Method to show the edit form
     public function edit(string $id)
     {
         $data = register_profiles::where('r_profile_id', $id)->first();
         return view('Registration.edit')->with('data', $data);
     }
 
     // Method to update the registration data
     public function update(Request $request, string $id)
     {
         $request->validate([
             'r_name' ,
             'r_identity_card' ,
             'r_gender',
             'r_password' ,
             'r_religion',
             'r_race',
             'r_citizenship' ,
             'r_address',
             'r_phone_number' ,
             'r_facebook',
             'r_current_edu_level' ,
             'r_edu_field',
             'r_edu_institute',
             'r_occupation' ,
             'r_sponsor' ,
             'r_program' ,
             'r_size' ,
             'r_batch' 
         ]);
 
         $data = [
             'r_name' => $request->r_name,
             'r_identity_card' => $request->r_identity_card,
             'r_gender' => $request->r_gender,
             'r_password' => bcrypt($request->r_password), // Encrypt the password before saving
             'r_religion' => $request->r_religion,
             'r_race' => $request->r_race,
             'r_citizenship' => $request->r_citizenship,
             'r_address' => $request->r_address,
             'r_phone_number' => $request->r_phone_number,
             'r_facebook' => $request->r_facebook,
             'r_current_edu_level' => $request->r_current_edu_level,
             'r_edu_field' => $request->r_edu_field,
             'r_edu_institute' => $request->r_edu_institute,
             'r_occupation' => $request->r_occupation,
             'r_sponsor' => $request->r_sponsor,
             'r_program' => $request->r_program,
             'r_size' => $request->r_size,
             'r_batch' => $request->r_batch,
         ];
      
 
         $user = register_profiles::where('r_profile_id', $id)->first();
         if ($user) {
             $user->update($data);
 
             // Redirect with success message
             return redirect()->back()->with('success', 'Profile updated successfully.');
         } else {
             // Redirect with error message if user not found
             return redirect()->back()->with('error', 'Profile not found.');
         }
     }
 
     // Method to show a specific profile
     public function show(string $id)
     {
         $data = register_profiles::where('r_profile_id', $id)->first();
         return view('Registration.Index')->with('data', $data);
     }
 

     public function destroy(string $id)
     {
         register_profiles::where('r_profile_id',$id)->delete();
         return redirect()->route('RegisterList')->with('success', 'User Deleted!');
     }
     

     public function userPost(Request $request)
     {
         // Validation
         $validatedData = $request->validate([
             'password' => 'required',
             'role' => 'required',
             'email' =>'required',
         ]);
     
         try {
             // Create user profile
             $userProfile = user_profiles::create([
                 'password' => bcrypt($validatedData['password']),
                 'role' => $validatedData['role'],
                 'email' => $validatedData['email']
             ]);
     
     
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
             'r_name'=>'required',
         ]);
     
         try {
             // Hash the password before storing
             $data['r_password'] = bcrypt($data['r_password']);
     
             // Create the register_profiles entry
             $profile = register_profiles::create($data);
     
             // Redirect with success message
             return redirect()->route('registerForm')->with('success', 'Platinum registered successfully!');
         } catch (\Exception $e) {
             return redirect()->back()->with('error', 'Failed to registered platinum: ' . $e->getMessage());
         }
     }
     

    public function LoginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);
    
        $email = $request->input('email');
        $password = $request->input('password');
        $role = $request->input('role');
    
        $authenticated = false;
        $user = null;
    
        if ($role == 'staff') {

            if($this->manualStaffAuth($email, $password)){
                $user = user_profiles::where('email', $email)->first();
               $this->manualLogin('staff', $user);

               //check if the user is authenticated
               if ($this->manualStaffAuth($email, $password)){
                return redirect()->route('StaffPage');
               }
               else {

                return redirect()->back()->withErrors(['Invalid credentials']);
            }
            }else {

                return redirect()->back()->withErrors(['Invalid credentials']);
            }
           
        } elseif ($role == 'mentor') { 
            
            if($this->manualMentorAuth($email, $password)){
            $user = user_profiles::where('email', $email)->first();
           $this->manualLogin('mentor', $user);

           //check if the user is authenticated
           if ($this->manualMentorAuth($email, $password)){
            return redirect()->route('MentorPage');
           }
           else {

            return redirect()->back()->withErrors(['Invalid credentials']);
        }
        }else {

            return redirect()->back()->withErrors(['Invalid credentials']);
        }
        } elseif ($role == 'platinum') {
            
            if($this->manualPlatinumAuth($email, $password)){
                $user = register_profiles::where('r_identity_card', $email)->first();
               $this->manualLogin('platinum', $user);
    
               //check if the user is authenticated
               if ($this->manualPlatinumAuth($email, $password)){
                return redirect()->route('PlatinumPage');
               }
               else {
    
                return redirect()->back()->withErrors(['Invalid credentials']);
            }
            }else {
    
                return redirect()->back()->withErrors(['Invalid credentials']);
            }
        }
    
      
    }
    

    private function manualStaffAuth($email, $password)
    {
        $user = user_profiles::where('email', $email)->first();
        if($user && Hash::check($password, $user->password)){
            return true;
        }
        return false;
    }

    private function manualMentorAuth($email, $password)
    {
        $user = user_profiles::where('email', $email)->first();
        if($user && Hash::check($password, $user->password)){
            return true;
        }
        return false;
    }

    private function manualPlatinumAuth($r_identity_card, $password)
    {
        $user = register_profiles::where('r_identity_card', $r_identity_card)->first();
        if($user && Hash::check($password, $user->r_password)){
            return true;
        }
        return false;
    }

    private function manualLogin($role, $user)
    {
        if ($role == 'staff') {
            session(['staff' => $user->staff_id]);
        } elseif ($role == 'mentor') {
            session(['mentor' => $user->mentor_id]);
        } elseif ($role == 'platinum') {
            session(['platinum' => $user->r_profile_id]);
            session(['r_name' => $user->r_name]); // Store r_name in session
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

