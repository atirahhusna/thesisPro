<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeeklyFocus extends Model
{
    use HasFactory;

    protected $primaryKey = 'WF_ID'; // Specify the custom primary key
    protected $fillable = ['username','WF_ID','WF_Description', 'WF_Type', 'WF_SDate', 'WF_EDate'];
    protected $table = 'weekly_foci';
    public $timestamps = false;

    public function platinum()
    {
        return $this->belongsTo(Platinum::class, 'username');
    }
}



