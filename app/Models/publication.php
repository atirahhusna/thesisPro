<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publication extends Model
{
    use HasFactory;

    protected $table = 'publication';
    public $timestamps = false;
    protected $primaryKey = 'publication_ID';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'publication_ID',
        'r_profile_id', //FK platinum
        'publication_title',
        'publication_DOI', 
        'publication_abstract', 
        'publication_date', 
        'publication_authors', 
        'publication_institution', 
        'publication_types'
    ];

    public function platinum()
{
    return $this->belongsTo(register_profiles::class, 'r_profile_id', 'r_profile_id');
}

}

