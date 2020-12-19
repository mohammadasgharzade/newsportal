<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  
    public function images(){
        
        return $this->hasMany(Image::class, 'parent_id');
    }

    public function category(){
        
        return $this->belongsTo(Category::class, 'cat_id');
    }


    public function subcategories(){
        return $this->belongsToMany(Subcategory::class);
    }

}
