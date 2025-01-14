<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegulationBy extends Model
{
    use HasFactory;

    protected $table = 'regulation_by';
    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'name'
    ];
}
