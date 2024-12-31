<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsKategori extends Model
{
    use HasFactory;

    protected $table = 'news_categories';
    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'name',
        'slug',
        'desc', 
    ];
}
