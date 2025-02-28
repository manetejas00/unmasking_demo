<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model {
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'detail_image',
        'sub_title',
        'designation',
        'page_content',
        'client',
        'category',
        'date',
        'address',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

