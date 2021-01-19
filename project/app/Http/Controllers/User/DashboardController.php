<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth:web');
    }

    public function index(){
        return view('user.dashboard');
    }
}
