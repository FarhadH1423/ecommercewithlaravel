<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index(){
        $catgs = Category::all();
        return view('category.index', compact('catgs'));
    }

    public function create(){
        return view('category.create');
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
        Category::create($input);
        return redirect()->route('category.index');
    }

    public function edit($id){
        $catgs = Category::find($id);
        return view('category.edit', compact('catgs'));
    }

    public function update(Request $request, $id){
        $catgs = Category::find($id);
        $input = $request->all();
        $input['picture'] = $catgs->picture; 
        if($request->file('picture')) 
            {   
                $file = $request->picture;
                if($catgs->picture != null)
                {
                    
                    if (file_exists('assets/images/service/'.$catgs->picture)) {
                        unlink('assets/images/service/'.$catgs->picture);
                    }
                }  
                $name = time().$file[0]->getClientOriginalName();
                $file[0]->move('assets/images/service/',$name);
                $input['picture'] = $name;
                
            } 
        $catgs->update($input);
        return redirect()->route('category.index');
    }
    public function delete($id){
        $data = Category::find($id);
        $data->delete();
        return redirect()->route('category.index');
    }
}


