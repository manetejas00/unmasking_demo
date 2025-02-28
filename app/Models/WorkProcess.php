<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkProcess extends Model
{
    use HasFactory; // ✅ This enables the factory method

    protected $fillable = ['title', 'description', 'image', 'step_number'];
}

