<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Shift;
use App\Member;

use Carbon\CarbonPeriod;
use Illuminate\Support\Arr;
use DB;
use SebastianBergmann\Environment\Console;

class ShiftController extends Controller
{
    public function index(Request $request){
        $shift = Shift::first();
        $members = Member::all(); 
        $group_shift = \App\Groupshift::all();
        $member_shift = \App\MemberShift::all();
        $datepicker = $request->datepicker3;
        if($datepicker)
        {
            $count_date = date('t',strtotime($datepicker)); 
            $year = date('Y',strtotime($datepicker)); 
            $month = date('m',strtotime($datepicker));
        }
        else
        {
            $count_date = date('t');
            $year = date('Y'); 
            $month = date('m');
        }
        foreach($members as $key =>$val){
            $records = [];
            for($i =0; $i<$count_date; $i++){
                $date =date('Y-m-d',strtotime($year.'-'.$month.'-'.($i+1)));
                $records[$i]['date'] = $i +1;
                $records[$i]['full_date'] = $date;
                $check = 0;
                $shift_date = DB::table('group_shift')    
                    ->join('member_shift', 'member_shift.group_id','=','group_shift.id')
                    ->where('member_shift.member_id',$val->id)
                    ->whereDate('date',$date)
                    ->selectRaw('date,name as ShiftName')
                    ->groupBy('member_shift.date')
                    ->first();
                if($shift_date){
                    $records[$i]['ShiftName'] = $shift_date->ShiftName;
                }else{
                    $records[$i]['ShiftName'] =0; 
                }
            }
            $members[$key]->ShiftName = $records;
        }  
        return view("backend.shift.view",compact('shift','members','group_shift','member_shift','records'));
    }
    public function store(Request $request){
        $count = DB::table('shift')->count();
        if($count == 1){
            DB::table('shift')->update([
            'start_time1' => $request->start_time1,
            'end_time1' => $request->end_time1,
            'start_time2' => $request->start_time2,
            'end_time2' => $request->end_time2,
            'overtime' => $request->overtime
            ]);
        }
       else{
            \App\Shift::create([
                'start_time1' => $request->start_time1,
                'end_time1' => $request->end_time1,
                'start_time2' => $request->start_time2,
                'end_time2' => $request->end_time2,
                'overtime' => $request->overtime
            ]);
       }
        return redirect()->back();
    }

    public function update(Request $request){
        
        $member_id = $request->member_id;
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $group = $request->group;
        $period = CarbonPeriod::create($start_date,$end_date);
        $arr = array();
        
        foreach($period as $key => $value){
            if(DB::table('member_shift')->where('member_id',$member_id)->where('date',$value->format('y-m-d'))->first()){
                DB::table('member_shift')
                ->where('member_id',$member_id)
                ->where('date',$value->format('y-m-d'))
                ->update([
                    'group_id' => $group,
                    'member_id' => $member_id,
                    'date' => $value->format('y-m-d'),
                ]);
            }
            
            else{
                \App\MemberShift::create([
                    'group_id' => $group,
                    'member_id' => $member_id,
                    'date' => $value->format('y-m-d'),
                ]);
            }
        }

        return response()->json([
            'success'=>'Cập nhật thành công',

        ]);

    }

    public function delete(Request $request){
        $member_id = $request->member_id;
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $period = CarbonPeriod::create($start_date,$end_date);
        foreach($period as $key => $value){
            if(DB::table('member_shift')->where('member_id',$member_id)->where('date',$value->format('y-m-d'))->first()){
                DB::table('member_shift')
                ->where('member_id',$member_id)
                ->where('date',$value->format('y-m-d'))->delete();
            }
        }
        return response()->json([
            'success'=>'Xóa thành công',
        ]);
    }

    public function destroy_group($id){
        $group_id = Shift::find($id);
        $count = DB::table('shift')->where('group_id',$group_id->group_id)->count();
        if($count == 1){
            DB::table('group_shift')->where('id',$group_id->group_id)->delete();
        }
        $group_id->delete();
        return redirect()->back(); 
    }

    public function assignment(Request $request){
        $member_id = $request->member_id;
        $group_id = $request->group_id;
        $from = $request->start_date;
        $to = $request->end_date;
        $period = CarbonPeriod::create($from,$to);
        
        foreach ($group_id as $key1 => $value1)
        {
            foreach ($member_id as $key2 => $value2) 
            {
                foreach ($period as $key3 => $value3) 
                {
                    if(!DB::table('member_shift')->where('member_id',$value2)->where('date',$value3->format('y-m-d'))->exists()){
                        \App\MemberShift::create([
                            'group_id' => $group_id[$key1],
                            'member_id' => $member_id[$key2],
                            'date' => $value3->format('y-m-d'),
                        ]);
                    }
                }
            }
        }
        return redirect()->back();
    }

}
