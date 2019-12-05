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
        
        return $this->belongsToMany(Category::class, 'post_category', 'post_id', 'category_id');
    }
}
