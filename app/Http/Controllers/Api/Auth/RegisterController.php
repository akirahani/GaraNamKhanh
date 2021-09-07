<?php

namespace App\Http\Controllers\Api\Auth;
use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function insert(Request $request){
        $input =$request->all();
        $insert = new Customer;
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique',
            'password'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'car_type'=>'required',
            'year_manufacture'=>'required',
            'license_plate'=>'required|unique',
            'insurance_company'=>'required',
            'assessor'=>'required',
        ],
            [
                'name.required'=>'*Chưa nhập tên',
                'email.required'=>'*Chưa nhập email',
                'passsword.required'=>'*Chưa nhập mật khẩu',
                'address.required'=>'*Chưa nhập địa chỉ',
                'phone.required'=>'*Chưa nhập số điện thoại',
                'car_type.required'=>'*Chưa nhập loại xe',
                'year_manufacture.required'=>'*Chưa nhập loại xe',
                'license_plate.required'=>'*Chưa nhập biển số xe',
                'insurance_company.required'=>'*Chưa nhập công ty bảo hiểm',
                'assessor.required'=>'*Chưa nhập người giám định',
            ]);
        $insert->name= $input('name');
        $insert->email= $input('email');
        $insert->password= bcrypt($input('password'));
        $insert->email= $input('address');
        $insert->email= $input('phone');
        $insert->email= $input('car_type');
        $insert->email= $input('year_manufacture');
        $insert->email= $input('license_plate');
        $insert->email= $input('insurance_company');
        $insert->email= $input('assessor');
        $insert->save();
        return response()->json([
                "success"=>"Bạn đã đăng kí thành công!"
        ]);
    }
}
