<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DraftThesis extends Model
{
    use HasFactory;
    protected $fillable = ['title'];
    protected $table = 'DraftThesis';
    public $timestamps = false;
}
