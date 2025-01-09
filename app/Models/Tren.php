<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tren extends Model
{
    use HasFactory;

    protected $table = 'tren';
    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'title',
        'slug',
        'image',
        'desc',
        'content',
        'views',
        'tren_category_id',
    ]; 
    
    public function tren_category()
    {
        return $this->belongsTo(TrenCategory::class, 'tren_category_id');
    }
}
