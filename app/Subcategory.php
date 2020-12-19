<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    
    
    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function posts(){
        return $this->belongsToMany(Post::class);
    }

    public function onetomanyimages(){
        return $this->hasMany(Image::class,'cat_id');
    }
    public function images(){
        return $this->belongsToMany(Image::class);
    }

    public function videos(){
        return $this->belongsToMany(Video::class);
    }


}
