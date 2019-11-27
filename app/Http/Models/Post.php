<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    
    public function categories()
    {

        return $this->belongsToMany(Post::class, 'post_category', 'category_id', 'post_id');
    }
}
