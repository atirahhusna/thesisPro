<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;


    protected $fillable = [
        'Name',
        'address',
        'PhoneNum',
        'username',
        'MentorID',
    ];

    public function userProfile()
    {
        return $this->belongsTo(UserProfile::class, 'username', 'username');
    }

    public function mentor()
    {
        return $this->belongsTo(Mentor::class, 'MentorID', 'MentorID');
    }
}
