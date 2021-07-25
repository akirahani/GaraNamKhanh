<?php

namespace App\Http\Controllers\Backend\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;
class InfomationController extends Controller
{
    public function index(){
        $customer = Customer::all();
        return view('backend.customer.infomation',compact('customer'));
    }
    public function insert(Request $requset){
        return view('backend.customer.insert');
    }
    public function store(Request $requset){
        $customer = new Customer;
        $customer->name = $requset->input('name');
        $customer->email = $requset->input('email');
        $customer->password = $requset->input('password');
        $customer->phone = $requset->input('phone');
        $customer->address = $requset->input('address');
        $customer->save();
        return redirect()->route('backend.customer');
    }
    public function edit($id){
        $customer = Customer::find($id);
        return view('backend.customer.edit')->with('customer',$customer);
    }
    public function update(Request $request,Customer $customer){
        
        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');
        // $password =bcrypt($request->input('password'));
        $data = array(
            'name' => $name,
            'email' => $email,
            'phone' =>$phone,
            'address'=>$address
            // 'password'=>$password,
     
        );
       $customer->where('id',$id)->update($data); 
        return redirect()->route('backend.customer');
    }
    public function delete($id, Customer $customer){
        $customer->where('id',$id)->delete();
        return response()->json([
            'success'=>'Acccount has been delete'
        ]); 
    }
}
