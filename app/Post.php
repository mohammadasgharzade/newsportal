<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
   

    public function subcategories(){
        return $this->belongsToMany(Subcategory::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }
}
