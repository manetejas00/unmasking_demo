<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'features'
    ];

    protected $casts = [
        'features' => 'array', // Ensures it is always an array
    ];

}
