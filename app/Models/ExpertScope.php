<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpertScope extends Model
{
    use HasFactory;

    protected $table = 'expert_scopes';
    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'title',
        'image',
        'icon',
        'slug',
    ];

    // Jika ingin menambahkan fungsi atau relasi lainnya, bisa dilakukan di sini
}
