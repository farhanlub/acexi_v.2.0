<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    // Define the table name if it does not follow the default pluralization convention
    protected $table = 'testimonials';

    // Define the fillable fields to protect against mass-assignment vulnerabilities
    protected $fillable = [
        'name',
        'role',
        'testimonial_text',
        'image_small',
        'image_large',
        'is_active',
    ];

    // Set the date fields for automatic handling of timestamps
    protected $dates = ['created_at', 'updated_at'];

    // If you're using a custom timestamp format, you can define it here
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
