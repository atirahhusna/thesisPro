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
        'Name',
        'EducationLevel',
        'Position',
        'Experience',
        'PhoneNumber',
        'username',
    ];

    public function userprofile()
    {
        return $this->belongsTo(userProfile::class, 'username', 'username');
    }
}
