<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware; 
use Illuminate\Http\Request; 
class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            
            if($request->is('admin') ){
                return url('admin/login') ;

            }elseif($request->is('web')){
                return url('user/login');
                
            }
            else{
                return url('user/login');
            }
           
        
            
           
        }
    }
}
