<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Shift;
use App\Member;
use Carbon\CarbonPeriod;
use Illuminate\Support\Arr;

class ShiftController extends Controller
{
    public function index(){
        $shift = Shift::paginate(5);
        $member = Member::all();
        $group_shift = \App\Groupshift::all();
        $member_shift = \App\MemberShift::all();
        return view("backend.shift.view",compact('shift','member','group_shift','member_shift'));
       
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
       Shift::find($id)->delete($id);
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
