<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function RegisterForm()
    {
        return view('Register');
    }

    public function registerPost(Request $request)
    {
       $request->validate([
        'Title'=> 'required',
        'name'=> 'required',
        'identityCard'=> 'required',
        'gender'=> 'required',
        'Religion'=> 'required',
        'race'=> 'required',
        'citizenship'=> 'required',
        'address'=> 'required',
        'phoneNumber'=> 'required',
        'facebook'=> 'required',
        'email'=> 'required',
        'currentEduLevel'=> 'required',
        'eduField'=> 'required',
        'eduInstitute'=> 'required',
        'occupation'=> 'required',
        'sponsor'=> 'required',
        'Title'=> 'required',
        'program'=> 'required',
        'Title'=> 'required',
        'size'=> 'required',
        'batch'=> 'required'
       ]);

       
    }
}
