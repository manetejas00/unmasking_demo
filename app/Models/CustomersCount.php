<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomersCount extends Model
{
    use HasFactory;

    protected $table = 'customers_count';

    protected $fillable = ['title', 'count', 'suffix'];
}

