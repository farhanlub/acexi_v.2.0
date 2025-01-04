<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'title',
        'slug',
        'image',
        'desc',
        'source',
        'views',
        'news_category_id',
    ]; 
    public function news_category()
    {
        return $this->belongsTo(NewsKategori::class, 'news_category_id');
    }
}
