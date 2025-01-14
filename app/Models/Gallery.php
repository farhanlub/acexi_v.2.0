<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'galleries';
    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'title',
        'slug',
        'image', 
        'content', 
    ];
}
