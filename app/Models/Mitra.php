<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $table = 'mitra'; // Nama tabel
    protected $fillable = ['name', 'description', 'image_url', 'website_url','email'];
}
