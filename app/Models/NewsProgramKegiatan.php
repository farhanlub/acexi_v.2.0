<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsProgramKegiatan extends Model
{
    use HasFactory;

    protected $table = 'news_program_kegiatan';
    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'title',
        'slug',
        'image',
        'desc',
        'content',
        'views',
        'program_kegiatan_id', 
    ];

    // Jika ingin menambahkan fungsi atau relasi lainnya, bisa dilakukan di sini
    public function program_kegiatan()
    {
        return $this->belongsTo(ProgramKegiatan::class,'program_kegiatan_id');
    }
}
