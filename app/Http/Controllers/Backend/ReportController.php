<?php
namespace App\Http\Controllers\Backend;
use App\User;
use App\Member;
use App\Attendance;
use App\Shift;
use DB;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report_index(Request $request){
        $members = Member::all();
        $attendance = Attendance::all();
         if($request->datepicker) {
                $dtp =$request->datepicker;
                $dayofmonth = date('t',strtotime($dtp));
                $month = date('m',strtotime($dtp));
                $year =date('Y',strtotime($dtp));
         }

         else{
                $dayofmonth = date('t');
                $month = date('m');
                $year =date('Y');
            }   
        foreach($members as $k =>$value)
        {
                $timeget= DB::table('attendance')
                ->where('member_id',$value->id)
                ->whereMonth('date',$month)
                ->whereYear('date',$year)
                ->selectRaw('date, SUM(hour(time_out-time_in)) as HourDo')
                ->groupBy('date')    
                ->get();
                
                $overtime= DB::table('attendance')
                ->where('member_id',$value->id)
                ->whereMonth('date',$month)
                ->where('shift_id','=',\App\Shift::SHIFT_OVERTIME)
                ->whereYear('date',$year)
                ->selectRaw('date, SUM(hour(time_out-time_in)) as OverTime')
                ->groupBy('date')    
                ->get();
                
           
                
                $records = [];
                for( $i= 0; $i<$dayofmonth ; $i++)
                {
                    $total=0;
                    $over=0;
                    $check = 0;
                    $records[$i]['date'] = $i+1;
                        foreach($timeget as $key =>$val)
                        {
                            if(date('d',strtotime($val->date)) == $i+1)
                            {
                                $records[$i]['time'] = $val->HourDo;
                                $check = 1;   
                            }
                        }
                        if($check==0)
                        {
                            $records[$i]['time'] =0;
                        }   
                        //
                        foreach($overtime as $key =>$val)
                        {
                            if(date('d',strtotime($val->date)) == $i+1)
                            {
                                $records[$i]['overtime'] = $val->OverTime;
                                $check = 1;   
                            }
                        }
                        if($check==0)
                        {
                            $records[$i]['overtime'] =0;
                        }  
                }    
                $members[$k]['time'] = $records;
            
            
                $full = [];
                for($j =0; $j<1 ;$j++) {
                    foreach($timeget as $key =>$val)
                    {
                        
                            $total += $val->HourDo;    
                        
                    }
                    $full[$j]['total'] =$total;
                }
                $members[$k]['total']= $full;   

                $ovt = [];
                for($o =0; $o<1 ;$o++) {
                    foreach($overtime as $key =>$val)
                    {
                            $over += $val->OverTime;    
                    }
                    $ovt[$o]['overtime'] =$over;
                } 
                    $members[$k]['overtime'] =  $ovt;  
                $twork= []; 
                $timework = $total - $over;
                for($tw =0; $tw<1 ;$tw++) {
                    $twork[$tw]['timework'] = $timework ;
                }
                $members[$k]['timework'] = $twork;  
        }   
   
        
      
         return view('backend.report.index',compact('members','attendance','records'));
     }
       
    public function report_detail(Request $request,$id){
        $member = Member::find($id);
        $shift = Shift::all();

        $attendance = DB::table('attendance')->where('member_id',$id)->select('date','time_in','time_out')
                                            ->get();
    // dd($attendance);
        return view('backend.report.detail',compact('member','attendance','shift'));
    }
}
