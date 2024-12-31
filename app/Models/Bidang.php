<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;

    protected $table = 'bidang';
    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'name',
        'slug',
        'kategori_pengurus_id', 
    ];

    // Jika ingin menambahkan fungsi atau relasi lainnya, bisa dilakukan di sini
    public function kategori_pengurus()
    {
        return $this->belongsTo(KategoriPengurus::class,'kategori_pengurus_id');
    }
    public function pengurus()
    {
        return $this->hasMany(Pengurus::class, 'bidang_id');
    }
}
