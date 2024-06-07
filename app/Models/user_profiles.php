<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_profiles extends Model
{
    use HasFactory;
    protected $table ='user_profiles';
    protected $primarykey ='username';
    
    protected $fillable = [
        'username',
        'password',
        'role',
        'email'
    ];
}
