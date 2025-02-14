<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppInformation extends Model
{
    protected $table = 'app_information';
    protected $fillable = ['name', 'facebook', 'x', 'whatsapp', 'linkedin', 'instagram', 'email', 'address','tel'];
}
