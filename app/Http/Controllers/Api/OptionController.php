<?php

namespace App\Http\Controllers\Api;
use App\PriceNotification;
use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
class OptionController extends Controller
{
    public function index($id){
        $customers= Customer::find($id)->price_notification;
        return response()->json([
            "success"=>"thông tin báo giá"
        ]);
    }   
    public function update(Request $request,PriceNotification $pn){
        $input = $request->all();
        $id = $input['id'];
        $pn->customer_id = $input['id_customer'];
        $pn->customer($input['id_customer']);
        $updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        $status = 1;
        $data= [
            'status'=>$status,
            'updated_at'=>$updated_at,
        ];
        $pn->where('id',$id)->update($data);
        return response()->json([
            'cập nhật báo giá'
        ]);
          
    } 
}