<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'details', 'picture', 
    ];

    public function product(){
         return $this->hasMany('App\Models\Product','cat_id');  
    }
}