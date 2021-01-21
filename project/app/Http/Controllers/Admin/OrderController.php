<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Order;
Use App\Models\User;
Use App\Models\Orderdetail;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
    public function index(){
        
        
        // $users = Order::where('user_id',$id)->get();
        $checks = Order::all();
        foreach ($checks as $check) {
            
            $name =  DB::table('users')
                ->where('id',$check->user_id)
                ->get('name');

                return view('admin.order', compact('checks','name'));
        }
        
        
    }

    public function details($id){
        $details = Orderdetail::where('order_id',$id)->get();
        return view('admin.details', compact('details'));

    }
}
