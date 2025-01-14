<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeberlanjutanPendampingan extends Model
{
    use HasFactory;

    protected $table = 'keberlanjutan_pendampingan';
    // Kolom yang bisa diisi secara massal
    protected $fillable = ['name', 'type', 'desc'];
}
