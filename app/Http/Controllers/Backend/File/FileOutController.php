<?php

namespace App\Http\Controllers\Backend\File;
use App\SparePart;
use App\PriceNotification;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SpareDetail;
use App\Customer;
use App\FileOut;
use Carbon\Carbon;
use DB;
class FileOutController extends Controller
{
    
    public function index()
    { 
             $pns = FileOut::all();
            return view('backend.spare.file.file_out',compact('pns'));
    }
    public function detail($id)
    {
        $pns = FileOut::find($id);        
        return view('backend.spare.file.out_detail',compact('pns'));
    }
    public function create(){
        $customers = Customer::all();
        $spd = DB::table('spare_details')
        ->join('references','spare_details.id_spare','=','references.id')
        ->join('suppliers','spare_details.id_supplier','=','suppliers.id')
        ->select('spare_details.*', 'references.name_spare','references.unit','references.serial','references.model', 'suppliers.name')
        ->where('amount','>',0)->get();
        return view('backend.spare.file.out_create',compact('spd','customers'));
    }
    public function insert(Request $request){
        $input= $request->all();
        $file_out = new FileOut;
        $file_out['status'] = 0;
        $file_out['created_at'] = Carbon::now('Asia/Ho_Chi_Minh');
        $file_out['id_customer'] =$input['id_customer'];
        $file_out->save(); 
        foreach($input['id_spareout'] as $key=>$val){
            $file_out->fout_spare()->attach($input['id_spareout'][$key]);
        }
  
        return redirect()->route('admin.file.out');
    }
    public function delete($id,FileOut $file_out){
        $file_out->where('id',$id)->delete();
    
        return response()->json([
            'Hủy đơn xuất thành công'
        ]);
    }
    public function export(Request $request, SpareDetail $spd  ,FileOut $file_out){
        $input =$request->all();
        foreach($input['id_spare'] as $key=>$val){
            $id = $input['id_spare'][$key];
            $arr['id_spare'] = $input['id_spare'][$key];
            $arr['id_fileout'] = $input['id_pn'];
            $arr['amount_out'] = $input['amount_out'][$key] ;
            $arr['unit_price'] = $input['price_out'][$key];
            $id_out = $input['id_pn'];
            $data = [
                'status' => 1
            ];
            $file_out->where('id',$id_out)->update($data);
            $arr['total_price']= $input['amount_out'][$key]* $input['price_out'][$key];
            $arr['created_at']= Carbon::now('Asia/Ho_Chi_Minh');
            SparePart::create($arr);
            // cập nhật lại kho
            $record = DB::table('spare_details')->where('id',$id)->first();
            $exist  = $record->amount;  // số lượng tồn hiện tại
            $rec['amount']  = $exist - $input['amount_out'][$key]; //số lượng đc cập nhật lại
            $spd->where('id',$id)->update($rec);
         
        }
        return redirect()->route('backend.spare.out');
    }
}
