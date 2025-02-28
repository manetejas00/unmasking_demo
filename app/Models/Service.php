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
        'features',
        'page_content',
        'icon_image'
    ];

    protected $casts = [
        'features' => 'array', // Ensures it is always an array
    ];

    public function categories()
{
    return $this->belongsToMany(Category::class);
}


}
