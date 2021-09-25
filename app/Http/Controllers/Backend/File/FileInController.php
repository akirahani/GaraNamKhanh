<?php

namespace App\Http\Controllers\Backend\File;
use App\SpareIn;
use App\FileIn;
use App\FinSpare;
use App\SpareDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class FileInController extends Controller
{
    public function index(){
        $filein = FileIn::all();
        return view('backend.spare.file.file_in',compact('filein'));
    }
    public function create(){
        $spare_detail = SpareDetail::all();
        return view('backend.spare.file.in_create',compact('spare_detail'));
    }
    public function insert(Request $request){
        $input= $request->all();
        $filein = new FileIn;
        $filein['status'] = 0;
        $filein['created_at'] = Carbon::now('Asia/Ho_Chi_Minh');
        $filein->save();  
   
        foreach($input['id_sparein'] as $k =>$value){
                
            $filein->fin_spare()->attach($input['id_sparein'][$k]);
         }
        return redirect()->route('admin.file.in');
    }
    public function import(Request $request,SpareDetail $spare_detail,FileIn $file_in){
        $input =$request->all();
        $store_in = new  SpareIn;
        $sparein['created_at'] = Carbon::now('Asia/Ho_Chi_Minh');
         foreach($input['id_sparein'] as $key=>$val){
                 $id = $input['id_sparein'][$key];
                 $record = DB::table('spare_details')->where('id',$id)->first();
                 $exist = $record->amount;
                 $id_filein =  $input['id_filein'];
                 $data =[
                     'status'=>1
                 ];
                 $file_in->where('id',$id_filein)->update($data);
                 $arr['amount'] = $input['amount_in'][$key] +$exist;
                 $sparein['id_spare'] = $input['id_sparein'][$key];
                 $sparein['price_in'] = $input['price_in'][$key];
                 $sparein['id_filein'] = $input['id_filein'];
                 $spare_detail->where('id',$id)->update($arr);
                 $sparein['amount_in'] =  $input['amount_in'][$key];      
                
                 $store_in->create($sparein);
             
             
         }     
         return redirect()->route('admin.sparein.index');
    }
    public function detail($id){
        $file_in = FileIn::find($id);
        return view('backend.spare.file.in_detail',compact('file_in'));
    }
    public function delete($id,FileIn $file_in){
        $file_in->where('id',$id)->delete();
    
        return response()->json([
            'Hủy đơn thành công'
        ]);
    }


}
