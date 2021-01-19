<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Generalsetting;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Validator;
use Session;
use DB;
use App;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:web', ['except'=>'logout']);
    }

    public function showLoginForm(){
        return view('user.login');
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
      if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
        // if successful, then redirect to their intended location
        // return response()->json(route('user.dashboard'));
        // return redirect(route('user.dashboard'));

        return redirect()->route('user.dashboard');
      }

      // if unsuccessful, then redirect back to the login with the form data
     return back()->with('message','Doesnt match');    
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('user.login');
    }
}
