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
        $config = Config::first();
        return view('mobile.attendance.scan',compact('member','config'));
    }
  
    public function attendance(Request $request){
        $input = $request->all();
        if($input['code'] ==  \App\Config::first()->session){
            $auth_id = Auth::guard('member')->user()->id;
            $time = Carbon::now('Asia/Ho_Chi_Minh')->toTimeString();
            
            $attendanes = new \App\Attendance();
            $attendanes->time = $time;
            $attendanes->date = date('Y-m-d');
            $attendanes->member_id = $input['id'];
            $attendanes->save();

        }
    }

}
