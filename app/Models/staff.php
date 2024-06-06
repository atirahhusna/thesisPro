<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
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
        'username'
    ];

    public function user_profiles()
    {
        return $this->belongsTo(user_profiles::class, 'username', 'username');
    }
}
