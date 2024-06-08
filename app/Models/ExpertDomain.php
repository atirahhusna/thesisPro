<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expertdomain extends Model
{
    use HasFactory;

    protected $primaryKey = 'e_ID';
    protected $table = 'expertdomain';

    protected $fillable = [
        'e_ID',
        //'platID',
        'e_Name',
        'e_University',
        'e_Expertise',
        'e_Email',
        'e_PhoneNum',
        'e_TitleResearch',
        'e_Paper',
    ];
}
