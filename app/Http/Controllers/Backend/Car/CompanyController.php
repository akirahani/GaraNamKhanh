<?php

namespace App\Http\Controllers\Backend\Car;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\InsuranceCompany;
class CompanyController extends Controller
{
    public function index(){
        $company = InsuranceCompany::all();
        return view('backend.car.company.index',compact('company'));
    }
    public function insert(Request $requset){
        return view('backend.car.company.insert');
    }
    public function store(Request $requset){
        $input= $requset->all();
        foreach($input['name'] as $key=>$val){
            $arr['name']= $input['name'][$key];
            $arr['phone']= $input['phone'][$key];
            $arr['address']= $input['address'][$key];
            $arr['website']= $input['website'][$key];
            $arr['email']= $input['email'][$key];
            $arr['tax_code']= $input['tax_code'][$key];
            $arr['note']= $input['note'][$key];
            $arr['rating']= $input['rating'][$key];
            InsuranceCompany::create($arr);
        }
        return redirect()->route('admin.car.company.index');
    }
    public function edit($id){
        $company = InsuranceCompany::find($id);
        return view('backend.car.company.edit',compact('company'));
    }
    public function update(Request $request,InsuranceCompany $company){
        $input = $request->all();
        $id = $input['id'];
        $name = $input['name'];
        $address = $input['address'];
        $phone =$input['phone'];
        $email =$input['email'];
        $website =$input['website'];
        $tax_code =$input['tax_code'];
        $note =$input['note'];
        $rating =$input['rating'];
        $data = array(
            'name' => $name,
            'address' => $address,
            'phone'=>$phone,
            'email'=>$email,
            'website'=>$website,
            'tax_code'=>$tax_code,
            'note'=>$note,
            'rating'=>$rating,
        );
        $company->where('id',$id)->update($data); 
        return redirect()->route('admin.car.company.index');
    }
    public function delete($id,InsuranceCompany $company){
        $company->where('id',$id)->delete();
        return response()->json([        
            'success'=>'Xóa công ty bảo hiểm thành công'
        ]); 
    }
}
