<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegulationCC extends Model
{
    use HasFactory;

    protected $table = 'regulation_cc';
    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'title',
        'desc',
        'source',
        'year',
        'regulation_categories_id',
        'regulation_by_id',
    ];

    public function belongToCategory()
    {
        return $this->belongsTo(RegulationCategory::class, 'regulation_categories_id');
    }
    public function belongToBy()
    {
        return $this->belongsTo(RegulationBy::class, 'regulation_by_id');
    }
}
