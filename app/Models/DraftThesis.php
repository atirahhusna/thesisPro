<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DraftThesis extends Model
{
    use HasFactory;
    protected $table = 'draft_theses';
    protected $fillable = [
    'DT_Title', 
    'DT_DraftNum',
    'DT_PagesNum',
    'DT_TotPagesNum',
    'DT_SDate',
    'DT_EDate',
    'DT_DaysPrepare',
    'DT_Comment',
    'DT_DDC',
    'DT_Completion',
    ];
    public $timestamps = false;
}
