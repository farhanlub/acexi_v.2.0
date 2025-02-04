<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str; // Tambahkan untuk menggunakan helper slug

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams'; // Nama tabel di database

    // Kolom yang dapat diisi
    protected $fillable = [
        'name',
        'role',
        'title',
        'email',
        'pakar',
        'display_in_home',
        'expert_scope_id',
        'image',
        'facebook',
        'email',
        'linkedin',
        'twitter',
        'instagram',
        'slug', // Menambahkan slug ke array fillable
    ];

    // Menentukan tipe kolom
    protected $casts = [
        'type' => 'string', // 'dewan' atau 'non dewan'
    ];
    // Relasi many-to-one ke model ExpertScope
    public function expertScope()
    {
        return $this->belongsTo(ExpertScope::class);
    }
    public function pengurus()
    {
        return $this->hasMany(Pengurus::class,'team_id');
    }
    protected static function booted()
    {
        static::creating(function ($team) {
            // Membuat slug secara otomatis berdasarkan nama
            $team->slug = Str::slug($team->name, '-');
        });

        static::updating(function ($team) {
            // Update slug jika nama diubah
            $team->slug = Str::slug($team->name, '-');
        });
    }
}
