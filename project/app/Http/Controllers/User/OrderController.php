<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Cart;
use Auth;

class OrderController extends Controller
{

    public function __construct(){
        $this->middleware('auth:web');
    }

    public function index(){
        $users = auth()->user();
        $carts = Cart::all();
        $total = Cart::sum('sub_total');
        return view('order.index', compact('carts','total','users'));
    }

    public function submit(){
        
        $users =  auth()->user();
        $carts = Cart::where();
        $data = array();
        $data['product_name'] = $carts->product_name;
        $data['product_price'] = $carts->product_price;
        $data['product_quantity'] = $carts->product_quality;
        $data['sub_total'] = $carts->sub_total;
        $data['user_id'] = $users->id;
        
        DB::table('orders')->insert($data);
        return redirect()->route('order.submit');
    }
}
