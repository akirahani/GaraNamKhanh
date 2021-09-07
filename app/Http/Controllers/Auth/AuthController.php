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
            $member = \Auth::guard('member')->user();
            $config = \App\Config::all();
            $token = $member->createToken('namkhanh')->accessToken;
            $member->token = $token;
            $member->save();
            return Redirect::route('home');
        }
        return Redirect::route('member.login')->with('error', 'Đăng nhập không thành công');
    }
    public function logoutMember() {
        if(\Auth::guard('member')->user()){
            \Auth::guard('member')->user()->tokens()->delete();
        }
        Auth::guard('member')->logout();
        return Redirect::route('member.login');
    }

    public function index(){
        $member = \Auth::guard('member')->user();
        $config = \App\Config::all();
        return view('mobile.layouts.index',compact('config','member'));
    }
    public function showFormlogin(){
        return view('frontend.auth.login');
    }


}

