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
    public function studi()
    {
        return $this->hasMany(Studi::class, 'studi_category_id');
    }

}
