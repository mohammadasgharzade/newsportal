<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primarykey = 'id';

    protected $fillable = [
        'title',
        'status',
        'parent_cat',
    ];


    public function subcategories(){
        return $this->belongsToMany(Subcategory::class);
    }

    public function posts(){
        return $this->belongsToMany(Post::class);
    }

    public function images(){

        return $this->hasMany(Image::class,'cat_id');

    }

    public function videos(){
        return $this->belongsToMany(Video::class);
    }
}
