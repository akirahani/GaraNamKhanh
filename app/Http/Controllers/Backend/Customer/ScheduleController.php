<?php

namespace App\Http\Controllers\Backend\Customer;
use App\Schedule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class ScheduleController extends Controller
{
    public function index(Request $request){
            $schedules= Schedule::all();
   
            foreach($schedules as $schedule){
                $schedule->member = DB::table('customers')
                ->where('id','=',$schedule->customer_id )
                ->first();
                $schedule->car = DB::table('cars')
                ->where('customer_id','=',$schedule->customer_id )
                ->first();
                // dd($schedule);
                $schedule->start = $schedule->start_time;
                $schedule->end = $schedule->end_time;
                $customer_info = $schedule->customer;
            }
            return view('backend.schedule.index',compact('schedules','customer_info'));
    }
    public function update(Request $request){
        if($request->ajax()){
            if($request->type=='update'){
                $schedule = Schedule::find($request->id)->update([
                  'status' =>$request->status,
                ]);
                return response()->json([
                    'Quý khách đã đặt lịch thành công'
                ]); 
            }
        }
    }
    public function delete($id,Book $book){
        $book->where('id',$id)->delete();
        return response()->json([
               "success"=>"book has been delete"
        ]);
    }
}
