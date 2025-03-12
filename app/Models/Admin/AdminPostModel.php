<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminPostModel extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected $fillable = [
        'title', 'content', 'slug', 'author_id', 'feature_image', 'post_date', 'short_content', 'type'
    ];

    protected $casts = [
        'post_date' => 'date', // Ensures it's cast as a date
    ];
}
