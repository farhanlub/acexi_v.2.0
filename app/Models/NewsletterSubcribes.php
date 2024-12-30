<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsletterSubcribes extends Model
{
    protected $table = 'newsletter_subcribes'; // Nama tabel
    protected $fillable = ['email']; // Kolom yang dapat diisi
}
