<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Groupshift;
use App\Shift;
class GroupShiftController extends Controller
{
    public function store(Request $request){
        $start_time = $request->start_time;
        $end_time = $request->end_time;
        $name = $request->name;
        $groupshift = Groupshift::create([
            'name' => $name,
        ]);

        $arr = array();
        foreach($start_time as $key => $value){
            $arr [] = [  
                \App\Shift::create([
                    'start_time' => $start_time[$key],
                    'end_time' => $end_time[$key],
                    'group_id' => $groupshift->id,
                ]),
            ];
        }
        return redirect()->back();
    }


}
