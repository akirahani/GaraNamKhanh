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
                $day_arrs = [];
            //hiển thị giờ làm format hour của từng ngày trong tháng
                for($i = 0; $i< $dayofmonth; $i++){
                    $day = $year.'-'.$month.'-'.($i+1);
                    $timegets= DB::table('attendance')
                    ->where('member_id',$value->id)
                    ->selectRaw('date, hour(time) as HourDo')
                    ->where('date',$day)    
                    ->get();
    
            //Xử lí giờ công trong từng ngày
                $day_even = []; // chan
                $day_odd = []; // le
                $working_hour =0;
                foreach($timegets as $key=>$val){
                    if($key%2==0){
                        $day_even[$key]['even'] = $val->HourDo; 
                    }             
                    else{
                        $day_odd[$key]['odd'] = $val->HourDo;
                    }
                    
                }  
                foreach( $day_odd as $ks =>$odd){
                    $working_hour += $day_odd[$ks]['odd'] - $day_even[$ks-1]['even'];   
                }
                $members[$k]['working_hour'] = $working_hour;
          
            //hiển thị số giờ công trong tất cả các ngày 
                $check = 0;   
                $day_arrs[$i]['date'] = $i+1;
                foreach($timegets as $timeget){
                    if(date('d',strtotime($timeget->date)) == $i+1){
                        $day_arrs[$i]['daytime'] =   $working_hour  ;
                        $check = 1;   
                    }             
                }
                if($check==0)
                {
                    $day_arrs[$i]['daytime'] =0;
                }   
                $members[$k]['daytime'] = $day_arrs;
         

                }
            //tổng h công của 1 nhân viên
                $full = [];
                $total= 0;
                for($j =0; $j<1 ;$j++) {
                    foreach($day_arrs as $day_arr){
                        $total +=  $day_arr['daytime'];   
                    }
                    $full[$j]['total'] =$total;
                }

                $members[$k]['total']= $full;           
        }   

         return view('backend.report.index',compact('members','attendance','day_arrs'));
     }
       
    public function report_detail(Request $request,$id){
        $member = Member::find($id);
        $shift = Shift::all();

        $attendance = DB::table('attendance')->where('member_id',$id)->select('date','time')
                                            ->get();
        return view('backend.report.detail',compact('member','attendance','shift'));
    }
}
