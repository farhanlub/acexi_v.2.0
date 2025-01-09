<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrenCategory extends Model
{
    use HasFactory;

    protected $table = 'tren_categories';
    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'name',
        'slug',
        'desc', 
    ];
    
}
