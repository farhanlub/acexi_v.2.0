<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegulationKebijakanCategory extends Model
{
    use HasFactory;

    protected $table = 'regulation_kebijakan_category';
    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'title',
        'slug'
    ];

    public function regulationsKebijakan()
    {
        return $this->hasMany(RegulationKebijakan::class, 'category_id');
    }
}
