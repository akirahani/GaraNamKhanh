<?php

namespace App\Http\Controllers\Customers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{

    public function __construct()
    {
        // method's body
    }
    protected $redirectTo = '/customer';

 
    public function login(){
        return view('customer.login');
    }


    public function guard()
    {
        return Auth::guard('customer');
    }

    public function postLogin(Request $request){
        $input = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];
        if (Auth::guard('customer')->attempt($input)) {
            $customer = Auth::guard('customer')->user();
            return Redirect::route('customer.home');
        }
        return Redirect::route('customer.login')->with('error', 'Tài khoản hoặc mật khẩu không đúng');

    }
    public function logoutCustomer() {
        Auth::logout();
        return Redirect::route('customer.login');
    }
}
