<?php

namespace App\Http\Controllers\Customers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
 

    use RegistersUsers;


    protected $redirectTo = '/customer/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        return view('customer.register');
    }
    public function __construct()
    {
        $this->middleware('customer');
    }





    protected function create(Request $request)
    {
        $customer = new Customer;
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'phone'=>'required',
            'address'=>'required'

        ],
        [
            'name.required'=>'*Chưa nhập tên',
            'email.required'=>'*Chưa nhập email',
            'password.required'=>'*Chưa nhập mật khẩu',
            'phone.required'=>'*Chưa nhập số điện thoại',
            'address.required'=>'*Chưa nhập địa chỉ'
        ]);
        

        $customer->name= $request->input('name');
        $customer->email= $request->input('email');
        $customer->password= bcrypt($request->input('password'));
        $customer->phone= $request->input('phone');
        $customer->address= $request->input('address');
        $customer->save();
        return redirect()->route('customer.login');
    }
}
