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
        'publication_title',
        'publication_DOI', 
        'publication_abstract', 
        'publication_date', 
        'publication_authors', 
        'publication_institution', 
        'publication_types'
    ];

}