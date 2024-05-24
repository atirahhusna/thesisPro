<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpertDomain extends Model
{
    use HasFactory;

    protected $primaryKey = 'e_ID';
    protected $table = 'ExpertDomain';

    protected $fillable = [
        'e_ID',
        'e_Name',
        'e_Email',
        'e_PhoneNum',
        'e_TitleResearch',
        'e_Paper',
        'e_University',
    ];
}
