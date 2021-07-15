<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Attendance;
use Auth;
use DB;
use App\Config;
use App\Shift;

class AttendanceController extends Controller
{
    public function scan(){
        $member = Auth::guard('member')->user();
        $config = Config::all();
        return view('mobile.attendance.scan',compact('member','config'));
    }

  
    public function attendance(Request $request){

        $input = $request->all();
        $auth_id = Auth::guard('member')->user()->id;
        $time = Carbon::now('Asia/Ho_Chi_Minh')->toTimeString();

        $attendanes = new \App\Attendance();
        $attendanes->time_in = $time;
        $attendanes->member_id = $input['id'];
        $attendanes->shift_id = $this->gettime($time);

        if(DB::table('attendance')->where('member_id',$auth_id)->get()->isEmpty()){
            $attendanes->save();
        }
        else{
            $check_time = DB::table('attendance')->where('member_id',$auth_id)->where('type',0)->first();
   
            if($check_time){
                
                DB::table('attendance')->where('member_id',$auth_id)->where('type',0)->update([
                    'type' => 1,
                    'time_out' => $time,
                ]);
            }
            else
            {
                $attendanes->save();
            }
        }

    }
    public function gettime($time){
        
        $date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $auth_id = Auth::guard('member')->user()->id;
        $group_id = DB::table('shift')->get('group_id')->first();

        $shifts_id = array();
        $group_shift = DB::table('member_shift')->where('member_id',$auth_id)->where('date',$date)->get();
        
        foreach($group_shift as $key => $value){
            $shift_id = DB::table('shift')->where('group_id', $value->group_id)->get();
            foreach($shift_id as $record){
                $shifts_id[] = $record;
            }
        }
        $last_shift_id  = array();
        foreach($shifts_id as $record){
            if(strtotime($time) < strtotime($record->end_time) )
            {
                $last_shift_id[] = $record->id;  
            }
        }
        // dd($last_shift_id);
        return $last_shift_id[0];

      
    }
}
