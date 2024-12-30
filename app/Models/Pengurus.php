<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;

    protected $table = 'pengurus';
    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'kategori_pengurus_id',
        'role',
        'team_id',
    ];

    // Jika ingin menambahkan fungsi atau relasi lainnya, bisa dilakukan di sini
    public function kategori_pengurus()
    {
        return $this->belongsTo(KategoriPengurus::class);
    }
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
