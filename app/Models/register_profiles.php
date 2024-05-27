<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register_profiles extends Model
{
    use HasFactory;
    protected $primaryKey = 'r_profile_id';

    
    // Specify the attributes that are mass assignable
    protected $fillable = [
        'r_profile_id',
        'r_identity_card',
        'r_gender',
        'r_password',
        'r_religion',
        'r_race',
        'r_citizenship',
        'r_address',
        'r_phone_number',
        'r_facebook',
        'r_current_edu_level',
        'r_edu_field',
        'r_edu_institute',
        'r_occupation',
        'r_sponsor',
        'r_program',
        'r_size',
        'r_batch',
        'r_name'
       
    ];
    
}
