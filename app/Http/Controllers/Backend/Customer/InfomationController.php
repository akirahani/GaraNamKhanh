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
    public function insert(){
        return view('backend.customer.insert');
    }
    public function store(Request $request){
        $input =$request->all();
        $customer = new Customer;
        $customer->name = $input['name'];
        $customer->email = $input['email'];
        $customer->password = bcrypt($input['password']);
        $customer->phone = $input['phone'];
        $customer->address = $input['address'];
        $customer->save();
        return redirect()->route('backend.customer');
    }
    public function edit($id){
        $customer = Customer::find($id);
        return view('backend.customer.edit')->with('customer',$customer);
    }
    public function update(Request $request,Customer $customer){
        $input =$request->all();
        $id = $input['id'];
        $name = $input['name'];
        $email = $input['email'];
        $phone =$input['phone'];
        $address = $input['address'];
        $password =bcrypt($input['password']);
        $data = array(
            'name' => $name,
            'email' => $email,
            'phone' =>$phone,
            'address'=>$address,
            'password'=>$password,
     
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
