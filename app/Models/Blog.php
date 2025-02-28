<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'author_name',
        'content',
        'image',
        'quote',
        'quote_author',
        'published_at',
        'tags',
        'meta_description',
    ];

    protected $casts = [
        'tags' => 'array',
        'published_at' => 'date',
    ];
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
