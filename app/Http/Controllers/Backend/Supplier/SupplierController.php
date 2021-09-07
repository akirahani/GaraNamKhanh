<?php

namespace App\Http\Controllers\Backend\Supplier;
use App\Supplier;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        $supplier = Supplier::paginate(10);
        return view('backend.supplier.index',compact('supplier'));
    }
    public function create(){
        return view('backend.supplier.create');
    }
    public function store(Request $request){
        $input= $request->all();
        foreach($input['name']  as $key=>$val){
            $supplier['name'] = $input['name'][$key];
            $supplier['address'] = $input['address'][$key];
            $supplier['phone'] = $input['phone'][$key];
            $supplier['email'] = $input['email'][$key];
            $supplier['website'] = $input['website'][$key];
            $supplier['tax_code'] = $input['tax_code'][$key];
            Supplier::create($supplier);
        }
        return redirect()->route('backend.supplier.view');
    }
    public function edit($id){
        $supplier= Supplier::find($id);
        return view('backend.supplier.edit')->with('supplier',$supplier);
    }
    public function update(Request $request,Supplier $supplier){
        
        $id = $request->input('id');
        $name = $request->input('name');
        $address = $request->input('address');
        $phone =$request->input('phone');
        $email =$request->input('email');
        $website =$request->input('website');
        $tax_code = $request->input('tax_code');
        $data = array(
            'name' => $name,
            'address' => $address,
            'phone'=>$phone,
            'email'=>$email,
            'website'=>$website,
            'tax_code'=>$tax_code
        );
       $supplier->where('id',$id)->update($data); 
        return redirect()->route('backend.supplier.view');
    }
    public function delete($id, Supplier $supplier){
        $supplier::find($id)->delete();
        return response()->json([   
                     
            'success'=>'Nhà cung cấp đã được xóa'
        ]); 
    }
}
