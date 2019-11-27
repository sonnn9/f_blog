<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function posts()
    {
        
        return $this->belongsToMany(Category::class, 'post_category', 'post_id', 'category_id');
    }
}
