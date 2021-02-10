<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //
    protected $table='sub_category';
    public $timestamps=false;


    public function products()
    {
        return $this->hasMany(Product::class, 'subcategory_id');
    }

    public function category()
    {
        return $this->belongsToMany(Category::class, 'category_id');
    }

}

