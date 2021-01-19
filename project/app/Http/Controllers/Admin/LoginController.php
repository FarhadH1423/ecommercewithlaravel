<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Generalsetting;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

use Validator;
use Session;
use DB;
use App;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin', ['except'=>'logout']);
    }

    public function showLoginForm(){
        return view('admin.login');
    }

    public function login(Request $request)
    {

        
        
        //--- Validation Section
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            
        ]);
        
        //--- Validation Section Ends
            
      // Attempt to log the user in
      if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
        // if successful, then redirect to their intended location
        // return response()->json(route('admin.dashboard'));
        // return redirect(route('admin.dashboard'));

        return redirect()->route('admin.dashboard');
      }

      // if unsuccessful, then redirect back to the login with the form data
     return back()->with('message','Doesnt match');    
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
