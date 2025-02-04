<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramKegiatan extends Model
{
    use HasFactory;

    protected $table = 'program_kegiatan';  // Nama tabel
    protected $fillable = ['title', 'description', 'image','slug','type'];

    public function newsProgramKegiatan(){
        return $this->hasMany(NewsProgramKegiatan::class, 'program_kegiatan_id');
    }
}
