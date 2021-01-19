<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index(){
        $logos = Setting::find(1);
        return view('logo.index',compact('logos'));
    }
    public function edit($id){
        $logos = Setting::find($id);
        return view('logo.edit', compact('logos'));
    }

    public function update(Request $request, $id){
        $logos = Setting::find($id);
        $input = $request->all();
        $input['picture'] = $logos->picture; 
        if($request->file('picture')) 
            {   
                $file = $request->picture;
                if($logos->picture != null)
                {                    
                    if (file_exists('assets/images/service/'.$logos->picture)) {
                        unlink('assets/images/service/'.$logos->picture);
                    }
                }  
                $name = time().$file[0]->getClientOriginalName();
                $file[0]->move('assets/images/service/',$name);
                $input['picture'] = $name;
                
            } 
        $logos->update($input);
        return redirect()->route('logo.index');
    }
}
