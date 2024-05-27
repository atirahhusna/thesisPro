<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeeklyFocus extends Model
{
    use HasFactory;
    protected $fillable = ['description', 'category', 'date'];
    protected $table = 'weekly_foci';
    public $timestamps = false;
}
