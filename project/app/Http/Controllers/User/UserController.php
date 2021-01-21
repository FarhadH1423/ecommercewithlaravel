<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Order;
Use App\Models\Orderdetail;
class UserController extends Controller
{
    public function index(){
        
        $users = auth()->user();
        $checks = Order::where('user_id',$users->id)->get();
        return view('user.order', compact('checks'));
    }

    public function details($id){
        $details = Orderdetail::where('order_id',$id)->get();
        return view('user.details', compact('details'));
    }
}
