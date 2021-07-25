<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Customer;
class Customer_Front
{
    public function handle($request, Closure $next)
    { 
        if(!is_null(Auth::guard('customer')->user())){
            return $next($request);
        }
        else {
            return redirect()->route('customer.login');
        }
    }
}
