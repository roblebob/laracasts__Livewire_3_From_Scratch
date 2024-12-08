<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;

    protected $fillable = ['title', 'content', 'published', 'notifications', 'photo_paths'];

    protected $casts = [
        'published' => 'boolean',
        'notifications' => 'array',
        'photo_paths' => 'array',
    ];
}
