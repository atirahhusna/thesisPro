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
        'mentor_id',
    ];

    public function userProfile()
    {
        return $this->belongsTo(userprofile::class, 'username', 'username');
    }

    public function mentor()
    {
        return $this->belongsTo(mentor::class, 'mentor_id', 'mentor_id');
    }
}
