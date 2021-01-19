<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $fillable = ['name', 'price','quantity','picture','cat_id'];

    public function category(){
        return $this->belongsTo('App\Models\Category','cat_id');   
    }
    public function cart(){
        
            return $this->hasMany('App\Models\Cart');
        }
    
}
