<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    
    protected $guarded = ['id', 'categories'];
    
    public function categories()
    {

        return $this->belongsToMany(Category::class, 'post_category', 'post_id', 'category_id');
    }
}
