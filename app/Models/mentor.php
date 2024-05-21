<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $table = 'mentor';

    protected $primaryKey = 'MentorID';

    protected $fillable = [
        'Name',
        'EducationLevel',
        'Position',
        'Experience',
        'PhoneNumber',
        'username',
    ];

    public function userProfile()
    {
        return $this->belongsTo(UserProfile::class, 'username', 'username');
    }
}
