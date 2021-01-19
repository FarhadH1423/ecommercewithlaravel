<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    // protected $fillable = [
    //     'product_id','product_name', 'product_price', 'product_qauntity' 
    // ];

    public $timestamps = false;

    public function products(){
        return $this->belongsTo('App\Models\Cart');   
    }
}
