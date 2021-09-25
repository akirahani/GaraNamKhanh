<?php

namespace App\Http\Controllers\Backend\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;
use DB;
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
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:customers',
            'phone'=>'required|unique:customers',
            'password'=>'required',
            'address'=>'required',
            'segment'=>'required',
            'birthday'=>'required',
            'business_infomation'=>'required',
            'related_infomation'=>'required',
            'avatar'=>'required'
        ],
        [
            'name.required'=>'*Chưa nhập tên',
            'email.required'=>'*Chưa nhập email',
            'phone.required'=>'*Chưa nhập số điện thoại',
            'password.required'=>'*Chưa nhập mật khẩu',
            'address.required'=>'*Chưa nhập địa chỉ',
            'segment.required'=>'*Chưa lựa chọn trạng thái khách hàng',
            'birthday.required'=>'*Chưa nhập số điện thoại',
            'business_infomation.required'=>'*Chưa nhập thông tin doanh nghiệp',
            'related_infomation.required'=>'*Chưa nhập thông tin liên quan',
            'avatar.required'=>'*Chưa chọn ảnh đại diện'
        ]);
        
        if($request->hasfile('avatar')){
            $filename= $request->file('avatar');
            $customer->avatar = time().'.'.$filename->getClientOriginalExtension();
            $path = $filename->move(public_path('assets/images/customer'), $customer->avatar);
       
        }
        
        else{
            $customer->avatar ='noimage.jpg';
        }
 
        $customer->name = $input['name'];
        $customer->email = $input['email'];
        $customer->address = $input['address'];
        $customer->password = bcrypt($input['password']);
        $customer->phone = $input['phone'];
        $customer->segment = $input['segment'];
        $customer->birthday= $input['birthday'];
        $customer->business_infomation = $input['business_infomation'];
        $customer->related_infomation = $input['related_infomation'];
   

        $customer->save();
        return redirect()->route('backend.customer');
    }
    public function edit($id){
        $customer = Customer::find($id);
        return view('backend.customer.edit')->with('customer',$customer);
    }
    public function update(Request $request,Customer $customer){
        $input =$request->all();
        // dd($input);
        $id = $input['id'];
        $name = $input['name'];
        $email = $input['email'];
        $phone =$input['phone'];
        $address = $input['address'];
        // $password =bcrypt($input['password']);
        $birthday = $input['birthday'];
        $segment = $input['segment'];
        $related_infomation= $input['related_infomation'];
        $business_infomation= $input['business_infomation'];
      
    
        $data = array(
            'name' => $name,
            'email' => $email,
            'phone' =>$phone,
            'address'=>$address,
            // 'password'=>$password,
            'birthday'=>$birthday,
            'segment'=>$segment,
            'related_infomation'=>$related_infomation,
            'business_infomation'=>$business_infomation
     
        );
        if($request->hasFile('avatar')){
            $image = $request->file('avatar');
            $destinationPath = public_path('assets/images/customer');
            $image_url = time().'.'.$image->getClientOriginalExtension();
            $image->move($destinationPath, $image_url);
            $data['avatar'] = $image_url;
        }
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
