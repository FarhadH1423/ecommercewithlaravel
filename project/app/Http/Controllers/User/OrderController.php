<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Cart;
Use App\Models\Order;
use Auth;
use Illuminate\Support\Facades\DB;

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

    public function submit(Request $request){
        
        $users =  auth()->user();
        $carts = Cart::all();
        $total = Cart::sum('sub_total');

            $data = array();
            $data['user_id'] = $users->id;
            $data['sub_total'] = $total;
            $order_id = DB::table('orders')->insertGetId($data);     
      
        // $orders = Order::all();
        // foreach ($orders as $order) {
        //     dd($order->id);
        // }
        foreach ($carts as $cart) {
            $details = array();
            $details['product_name'] = $cart->product_name;
            $details['product_id'] = $cart->product_id;
            $details['product_price'] = $cart->product_price;
            $details['product_quantity'] = $cart->product_quantity;
            $details['product_name'] = $cart->product_name;
            $details['total'] = $total;
            $details['user_id'] = $users->id;
            $details['order_id'] = $order_id;
            $details['user_contact'] = $users->contact;
            $details['user_address'] = $users->address;

            DB::table('orderdetails')->insert($details);

            DB::table('products')
                ->where('id',$cart->product_id)
                ->update(['quantity' => DB::raw('quantity -'.$cart->product_quantity)]);
        }
        DB::table('carts')->delete();

        return redirect()->route('front.index');
    }
}
