<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Banner;
use App\Models\Cart;
class FrontController extends Controller
{

    public function __construct(){ 
        
        // return view('front.index',compact('allcart'));
    }
    // public function __co
    public function index(){
        $products = Product::orderBy('id','desc')
                    ->get()
                    ->take(4)
                    ->all();
        $categories = Category::all();
        $banners = Banner::orderBy('id','desc')
                    ->get()
                    ->take(3)
                    ->all();
        
        return view('front.index', compact('products','categories','banners'));
    }

    // public function logo(){
    //     $logos = Setting::findOrFail(1);
    //     return view('layouts.front', compact('logos'));
    // }

    public function details($id){
         $categories = Category::find($id)->product;
         $categ = Category::find($id);
         $catg = Category::all();
         $logos = Setting::findOrFail(1);
        return view('front.details',compact('categories','catg','categ','logos')); 
    }
}
