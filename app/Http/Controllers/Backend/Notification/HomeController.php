<?php

namespace App\Http\Controllers\Backend\Notification;
use App\Work;
use App\SpareIn;
use App\SpareDetail;
use App\Reference;
use App\PriceNotification;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
class HomeController extends Controller
{
    public function index(){
        $price_notis  = PriceNotification::all();
        return view('backend.spare.response.index',compact('price_notis'));
    
    }

    public function store(Request $request, SpareDetail $spare_detail){
        $input=$request->all();
        $notification = new PriceNotification;
        $notification->customer_id = $input['id_customer'];
        $notification->status = 0;
        $notification->customer($input['id_customer']);
        $notification->created_at = Carbon::now('Asia/Ho_Chi_Minh');
        $notification->save();   
        $spare_detail = new SpareDetail; 
        foreach($input['checktrue1'] as $key=>$spare_reports){
            $notification->spare()->attach($input['checktrue1'][$key]);
        }

        foreach($input['checktrue'] as $k=>$work_reports){
            $notification->work()->attach($input['checktrue'][$k]);
   
        }
      
            return redirect()->route('admin.response.index');
       
    }
    public function detail($id,PriceNotification $price_notis){
        $price_notis  = PriceNotification::find($id);
        $sparein = SpareIn::all();
        
        return view('backend.spare.response.detail',compact('price_notis','sparein'));
    
    }
}
