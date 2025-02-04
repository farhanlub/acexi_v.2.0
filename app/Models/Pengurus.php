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
        'sort',
        'team_id',
        'bidang_id',
    ];

    // Jika ingin menambahkan fungsi atau relasi lainnya, bisa dilakukan di sini
    public function kategori_pengurus()
    {
        return $this->belongsTo(KategoriPengurus::class,'kategori_pengurus_id');
    }
    public function team()
    {
        return $this->belongsTo(Team::class,'team_id');
    }
    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'bidang_id');
    }
}
