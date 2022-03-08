<?php

namespace App\Http\Controllers\Backend;
use App\Calendar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function calendar(Request $request)
    {
        if($request->ajax()){
  
            $data= Calendar::whereDate('date','=',$request->date)
                        ->get(['id','type_date','date','title']);
            return response()->json($data);
    
        }

        
        $calendar= Calendar::all();
        return view('backend.calendar.calendar_index',compact('calendar'));
    } 
    public function post_calendar(Request $request){
  
     
      if($request->ajax()){
          if($request->type=='add'){
              $calendar = Calendar::create([
                'type_date' =>$request->type_date,
                'date'=>$request->date,
                'title'=>$request->title
              ]);
              return response()->json($calendar); 
          }
          if($request->type=='update'){
            $calendar = Calendar::find($request->id)->update([
                'type_date' =>$request->type_date,
                'date'=>$request->date,
                'title'=>$request->title
              ]);
              return response()->json($calendar); 
          }
          if($request->type=='delete'){
            $calendar = Calendar::find($request->id)->delete();
            return response()->json($calendar);
        }
      
          
          return view('backend.calendar.calendar_index');
          
      }
    }
}
