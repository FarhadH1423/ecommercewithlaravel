<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('product.index',compact('products'));
    }
    public function create(){
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    public function store(Request $request){
        
        $input = $request->all();
        if($request->file('picture')) 
        {   $images= array();
            $file = $request->picture;
            foreach ($file as $key  => $fil) {
            $name = time().$fil->getClientOriginalName();
            $fil->move('assets/images/service/',$name);
            $images[$key] = $name;
            $img = implode(",",$images);
            $input['picture'] = $img;
            }
            
        } 
        
        Product::create($input);
    	return redirect()->route('product.index');
    }

    public function edit($id){
        $product = Product::find($id);
        $categories = Category::all();
        return view('product.edit', compact('product','categories'));
    }

    public function update(Request $request, $id){
        // $categories = Category::all();
        $product = Product::find($id);
        $input = $request->all();
        $input['picture'] = $product->picture; 
        if($request->file('picture')) 
            {   
                $file = $request->picture;
                if($product->picture != null)
                {
                    
                    if (file_exists('assets/images/service/'.$product->picture)) {
                        unlink('assets/images/service/'.$product->picture);
                    }
                }  
                $name = time().$file[0]->getClientOriginalName();
                $file[0]->move('assets/images/service/',$name);
                $input['picture'] = $name;
                
            } 
        $product->update($input);
     
        return redirect()->route('product.index');
    }

    public function delete($id){
        $data = Product::find($id);
        if($data->picture == null){
            $data->delete();

           return redirect()->route('product.index'); 
        }
    
        if($data->picture != null)
        { 
            if (file_exists('assets/images/service/'.$data->picture)) {
                unlink('assets/images/service/'.$data->picture);
            }
        }  
        $data->delete();
    	return redirect()->route('product.index'); 
    }

}
