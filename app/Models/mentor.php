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
        'm_name',
        'm_email',
        'm_pasword',
        'm_education_level',
        'm_position',
        'm_experience',
        'm_phone_number'
    ];
}
