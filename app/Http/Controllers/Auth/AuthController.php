<?php

namespace App\Http\Controllers\Auth;

use Validator;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Auth;
class AuthController extends Controller
{
    public function __construct() {
       
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginMember(Request $request) {
        
        $input = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ];
        
        if(Auth::guard('member')->attempt($input)){
            
            return view('mobile.layouts.index');
        }
        return Redirect::route('member.login')->with('error', 'Đăng nhập không thành công');
    }
    public function logoutMember() {
        
        Auth::guard('member')->logout();
        return Redirect::route('member.login');
    }

    public function index(){
        return view('mobile.layouts.index');
    }
    public function showFormlogin(){
        return view('frontend.auth.login');
    }


}

