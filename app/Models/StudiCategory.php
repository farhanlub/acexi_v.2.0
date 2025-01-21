<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudiCategory extends Model
{
    use HasFactory;

    protected $table = 'studi_categories';
    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'name',
        'slug',
        'desc', 
    ];
    
}
