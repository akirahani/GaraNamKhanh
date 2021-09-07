<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function postLogin(Request $request) {
     
        $input = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];
        if (\Auth::attempt($input, true)) {
            $customer = Customer::user();
            return response()->json([
                "success"=>"đăng nhập thành công"]);
        }
        return response()->json([
            "error"=>"Tài khoản hoặc mật khẩu không đúng"]);
    }
}
