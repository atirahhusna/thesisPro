<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    use HasFactory;

    protected $primaryKey = 'staff_id';


    protected $fillable = [
        'staff_id',
        's_name',
        's_password',
        's_email',
        's_address',
        's_phone_number'
    ];

}
