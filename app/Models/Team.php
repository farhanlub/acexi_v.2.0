<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'role', 
        'image_url', 
        'type'
    ];

    protected $casts = [
        'type' => 'string', // 'dewan' or 'non dewan'
    ];
}
