<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CRMP extends Model
{
    use HasFactory;

    protected $fillable = [
        'crmp_ID',
        'crmp_Education',
        'crmp_Expertise',
        'crmp_Teaching',
        'crmp_Biography',
        'crmp_Name',
        'username',
    ];

    public function userProfile()
    {
        return $this->belongsTo(UserProfile::class, 'username', 'username');
    }
}
