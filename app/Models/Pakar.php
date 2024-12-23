<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pakar extends Model
{
    use HasFactory;

    protected $table = 'pakars';  // Nama tabel
    protected $fillable = ['name', 'title', 'image', 'facebook', 'linkedin', 'twitter', 'instagram'];
}
