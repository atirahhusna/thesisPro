<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register_profile extends Model
{
    use HasFactory;

    
    // Specify the attributes that are mass assignable
    protected $fillable = [
        'r_profileID',
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
        'r_name',
        'plat_id',
        'staff_id',
        'mentor_id',
        'crmp_ID'
    ];

    public function mentor()
    {
        return $this->belongsTo(mentor::class, 'mentor_id');
    }

    public function crmp()
    {
        return $this->belongsTo(crmp::class, 'crmp_id');
    }

    public function platinum()
    {
        return $this->belongsTo(platinum::class, 'plat_id');
    }

    public function staff()
    {
        return $this->belongsTo(staff::class, 'staff_id');
    }

    
}
