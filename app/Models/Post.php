<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'slug', 'content', 'published_at', 'feature_image', 'post_date', 'short_content'];
    public function author() {
        return $this->belongsTo(User::class, 'author_id');
    }

    public static function boot(){
        parent::boot();

        static::saving(function ($post) {
            if (empty($post->slug)) {
                $post->slug = Str::slug($post->title);
            }
        });
    }


}
