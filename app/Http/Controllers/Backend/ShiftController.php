<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Shift;
use Illuminate\Support\Facades\DB;
use App\Member;
use Carbon\CarbonPeriod;
use Illuminate\Support\Arr;
use DB;
class ShiftController extends Controller
{
    public function index(Request $request){
        $shift = Shift::paginate(5);
        $members = Member::all(); 
        $group_shift = \App\Groupshift::all();
        $member_shift = \App\MemberShift::all();

    $datepicker = $request->datepicker3;
    if($datepicker){
        $count_date = date('t',strtotime($datepicker)); 
        $year = date('Y',strtotime($datepicker)); 
        $month = date('m',strtotime($datepicker));
    }
    else{
        $count_date = date('t');
        $year = date('Y'); 
        $month = date('m');
    }
       
    foreach($members as $key =>$val){
        $records = [];
        for($i =0; $i<$count_date; $i++){
            $date =date('Y-m-d',strtotime($year.'-'.$month.'-'.($i+1)));
            $records[$i]['date'] = $i +1;
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
    public function create(){
        return view("backend.shift.create");
    }

    public function edit($id){
        $shift = Shift::find($id);
        return view('backend.shift.edit')->with('shift',$shift);
    }

    public function update(Request $request, $id){
        $shift = Shift::find($id);
        $shift->name = $request->name;
        $shift->start_time = $request->start_time; 
        $shift->end_time = $request->end_time;
        $shift->save();
        return redirect()->back();
    }

    public function store(Request $request){
        Shift::create([
            'name' => $request->name,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time
        ]);
    }

    public function destroy($id){
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
                    \App\MemberShift::create([
                        'group_id' => $group_id[$key1],
                        'member_id' => $member_id[$key2],
                        'date' => $value3->format('y-m-d'),
                    ]);
                }
            }
        }
        return redirect()->back();
    }
    public function destroyas($id){
        \App\MemberShift::find($id)->delete($id);

        return redirect()->back();
    }
}
