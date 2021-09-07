<?php

namespace App\Http\Controllers\Backend\DetailWS;
use App\Reference;
use App\Supplier;
use App\TypeSpare;
use App\Work;
use App\Customer;
use App\SpareDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
class DetailWSController extends Controller
{
    public function index(){
        $sdetail=SpareDetail::all();
        $references =  Reference::all();
        $works =  Work::all();
        $customers = Customer::all();
        return view('backend.detailws.index',compact('customers','works','sdetail'));
    }
    public function insert(Request $request){
        $input =$request->all();
  
        foreach($input['price_reference'] as $key=>$val){
            $arr['price_reference'] = $input['price_reference'][$key];
            $arr['id_spare']= $input['id_spare'][$key];
            $arr['id_supplier']= $input['id_supplier'][$key];
            $arr['id_type']= $input['id_type'][$key];
            $spare_detail = SpareDetail::create($arr);

        }
 
        return redirect()->route('admin.detailws.index');
    }
    public function delete($id,  SpareDetail $spare_detail){
        $spare_detail->where('id',$id)->delete();
        return response()->json([
            'success'=>'Xóa PT tham khảo thành công'
        ]);
    }
}
