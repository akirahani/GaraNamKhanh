<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function showLoginForm() { 
        return view('backend.auth.login');
    }
    
     public function postLogin(Request $request) {
        $input = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];
        if (\Auth::attempt($input, true)) {
            $user = Auth::user();
            return Redirect::route('admin.home');
        }
        return Redirect::route('login')->with('error', 'Tài khoản hoặc mật khẩu không đúng');
    }

    public function logoutAdmin() {
        Auth::logout();
        return Redirect::route('login');
    }
}
