<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegulationCategory extends Model
{
    use HasFactory;

    protected $table = 'regulation_categories';
    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'title',
        'slug'
    ];

    public function regulationsCC()
    {
        return $this->hasMany(RegulationCC::class, 'regulation_categories_id');
    }
    public function regulationsKebijakan()
    {
        return $this->hasMany(RegulationKebijakan::class, 'regulation_categories_id');
    }
}
