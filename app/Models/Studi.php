<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studi extends Model
{
    use HasFactory;

    protected $table = 'studi';
    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'title',
        'slug',
        'image',
        'desc',
        'content',
        'views',
        'studi_category_id',
    ]; 
    
    public function studi_category()
    {
        return $this->belongsTo(StudiCategory::class, 'studi_category_id');
    }
}
