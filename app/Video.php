<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    
    public function subcategories(){
        return $this->belongsToMany(Subcategory::class);
    }

}




















