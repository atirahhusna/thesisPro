<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $table = 'mentor';

    protected $primaryKey = 'mentor_id';

    protected $fillable = [

        'mentor_id',
        'm_username',
        'name',
        'm_education_level',
        'm_position',
        'm_experience',
        'm_phone_number'
    ];

    public function userprofile()
    {
        return $this->belongsTo(userProfile::class, 'username', 'username');
    }
}
