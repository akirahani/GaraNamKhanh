<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Member;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class Frontend {
    public function handle($request, Closure $next){

        if (!is_null(Auth::guard('member')->user())){
            
            return $next($request);
        } 
        else {
            return redirect()->route('member.login');
        }
    }
    
}
