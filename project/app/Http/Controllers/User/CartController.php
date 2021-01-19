<?php

namespace App\Http\Controllers\User;
use App\Models\Product;
Use App\Models\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function cart(){
        $carts = Cart::all();
        $total = Cart::sum('sub_total');
        
        return view('cart.index', compact('carts','total'));
    }

    public function addtocart(Request $request, $id){
        $product = Product::find($id);

        // if(!$product){
        //     abort(404);
        // }

        $check = Cart::where('product_id',$id)->first();
        if($check){
            Cart::where('product_id',$id)->increment('product_quantity');
            $cart = Cart::where('product_id',$id)->first();
            $subTotal = $cart->product_quantity * $cart->product_price;
            DB::table('carts')->where('product_id',$id)->update(['sub_total'=>$subTotal]);
        } else{
            $data = array();
            $data['product_id'] = $product->id;
            $data['product_name'] = $product->name;
            $data['product_price'] = $product->price;
            $data['product_quantity'] = 1;
            $data['sub_total'] = $product->price;

            DB::table('carts')->insert($data);
        }

        return redirect()->route('cart.index')->with(['message'=>'Add Successfully']);         
    }

    public function remove($id){
        $data = Cart::findOrFail($id);
        $data->delete();
        return redirect()->route('cart.index')->with('message','Deleted Successfully');

    }
    // public function increment($id){
    //     Cart::where('id',$id)->increment('product_quantity');

        
    // }

    public function decrement($id){
        Cart::where('id',$id)->decrement('product_quantity');
        $data = Cart::where('id',$id)->first();
        $subtotal = $data->product_price * $data->product_quantity;
        DB::table('carts')->where('id',$id)->update(['sub_total'=> $subtotal]);
        if($data->product_quantity<1){
            $data->delete();
        return redirect()->route('cart.index')->with('message','Product Deleted Sucessfully');
        } else{
            return redirect()->route('cart.index')->with('message','You Decrement the Quantity');
        }
    }

    public function increment($id){
        $cart = Cart::find($id);
        $cartQuantity = $cart->product_quantity;
        $productId = $cart->product_id;
        $productQuantity = Product::find($productId);
        if($productQuantity->quantity <=  $cartQuantity){
            return redirect()->route('cart.index')->with('error','Out of Stock');
        }
        
        
        Cart::where('id',$id)->increment('product_quantity');
        $data = Cart::where('id',$id)->first();
        $subtotal = $data->product_price * $data->product_quantity;
        DB::table('carts')->where('id',$id)->update(['sub_total'=> $subtotal]);
        return redirect()->route('cart.index')->with('message','Purchase Suceessfully');
        
    }
  

}
