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
        // if(Auth::check()){
        //     return view('user.login');
        // }
        $carts = Cart::all();
        $total = Cart::sum('sub_total');
        
        return view('order.index', compact('carts','total'));
    }
}
