<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index(){
        $banners = Banner::all();
        return view('banner.index', compact('banners'));
    }

    public function create(){
        return view('banner.create');
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
        Banner::create($input);
        return redirect()->route('banner.index');
    }

    public function edit($id){
        $banners = Banner::find($id);
        return view('banner.edit', compact('banners'));
    }

    public function update(Request $request, $id){
        $banners = Banner::find($id);
        $input = $request->all();
        $input['picture'] = $banners->picture; 
        if($request->file('picture')) 
            {   
                $file = $request->picture;
                if($banners->picture != null)
                {
                    
                    if (file_exists('assets/images/service/'.$banners->picture)) {
                        unlink('assets/images/service/'.$banners->picture);
                    }
                }  
                $name = time().$file[0]->getClientOriginalName();
                $file[0]->move('assets/images/service/',$name);
                $input['picture'] = $name;
                
            } 
        $banners->update($input);
        return redirect()->route('banner.index');
    }
    public function delete($id){
        $data = Banner::find($id);
        $data->delete();
        return redirect()->route('banner.index');
    }
}
