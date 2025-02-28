<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'description',
        'working_days',
        'working_hours',
        'social_links',
        'quick_links',
        'recent_posts',
        'official_info',
        'copyright_text',
    ];

    protected $casts = [
        'social_links' => 'array',
        'quick_links' => 'array',
        'recent_posts' => 'array',
        'official_info' => 'array',
    ];

    public function getSocialLinksAttribute($value)
    {
        return json_decode($value, true) ?? [];
    }
}
