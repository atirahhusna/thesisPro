<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platinum extends Model
{
    use HasFactory;

    

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'platID',
        'crmp_ID',
        'StaffID',
        'p_username',
        'p_password'
    ];

    // Define the relationships
    public function crmp()
    {
        return $this->belongsTo(Crmp::class, 'crmp_id', 'crmp_id');
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class, 'staff_id', 'staff_id');
    }

    public function userProfile()
    {
        return $this->belongsTo(userProfile::class, 'username', 'username');
    }
}
