<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $table = 'categories';
    protected $fillable = ["name"];

    public function posts()
    {
        
        return $this->belongsToMany(Post::class, 'post_category', 'category_id', 'post_id');
    }
}
