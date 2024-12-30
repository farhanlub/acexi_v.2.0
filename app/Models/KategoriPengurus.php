<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPengurus extends Model
{
    use HasFactory;

    protected $table = 'kategori_pengurus';
    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'name',
        'sort', 
    ];

    public function pengurus()
    {
        return $this->hasMany(Pengurus::class);
    }
}