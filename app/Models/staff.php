<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;


    protected $fillable = [
        'staff_id',
        's_name',
        's_address',
        's_phone_number',
        's_username',
        's_password',
        'mentor_id',
    ];

    public function userProfile()
    {
        return $this->belongsTo(userprofile::class, 'username', 'username');
    }

}
