<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crmp extends Model
{
    use HasFactory;
    protected $primaryKey = 'crmp_id';
    protected $fillable = [
        'crmp_id',
        'crmp_Education',
        'crmp_Expertise',
        'crmp_Teaching',
        'crmp_Biography',
        'crmp_Name',
        'username',
        'r_profile_id'
    ];
    public $timestamps = false;

    public function registerProfile()
    {
        return $this->belongsTo(register_profiles::class, 'r_profile_id', 'r_profile_id');
    }
}
