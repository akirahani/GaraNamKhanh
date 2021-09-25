<?php

namespace App\Http\Controllers\Backend\Customer;

use App\SparePart;
use App\Work;
use App\SpareDetail;
use App\PriceNotification;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class RepairController extends Controller
{
    public function index(){
        $repairs = PriceNotification::all();
        return view('backend.repair.index',compact('repairs'));
    }
    public function insert(){
        $pnotis = PriceNotification::all();
        $spares = SparePart::all();
        return view('backend.repair.insert',compact('pnotis','spares'));
    }
    public function store(Request $request, SpareDetail $spd  ,PriceNotification $repair){
        $input =$request->all();
         
        foreach($input['id_spare'] as $key=>$val){
            $id = $input['id_spare'][$key];
            $arr['id_spare'] = $input['id_spare'][$key];
            $arr['id_notification'] = $input['id_notification'];
            $id_repair = $input['id_notification'];
    
            $arr['amount_out'] = $input['amount_out'][$key] ;
            $record = DB::table('spare_details')->where('id',$id)->first();
            $exist  = $record->amount;  
            $rec['amount']  = $exist - $input['amount_out'][$key];
            $spd->where('id',$id)->update($rec);
            $arr['unit_price'] = $input['price_out'][$key];
            $arr['total_price']= $input['amount_out'][$key]* $input['price_out'][$key];
            $arr['created_at']= Carbon::now('Asia/Ho_Chi_Minh');
            SparePart::create($arr);
            $assessor = $input['assessor'];

            $data = [
                        
                        'assessor'=>$assessor 
                    ];
            $repair->where('id',$id_repair)->update($data);
        }
        return redirect()->route('admin.repair',compact('repair'));
    }
    public function detail($id){
  
        $repairs = PriceNotification::find($id);

        return view('backend.repair.detail')->with('repairs',$repairs);
    }
}
