<?php
namespace App\Http\Controllers\Backend\SparePart;
use App\SpareIn;
use App\SpareDetail;
use App\PriceNotification;
use App\Reference;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class SpareInController extends Controller
{
    public function index(){
        $sparein = SpareIn::all();
        return view('backend.spare.in',compact('sparein'));
    }
    public function insert(Request $request,SpareDetail $spare_detail){

            $input =$request->all();
            $sparein['created_at'] = Carbon::now('Asia/Ho_Chi_Minh');
             foreach($input['id_spare'] as $key=>$val){
                     $id_pn = $input['id_pn'];
                     $status = 2;
                        $data= [
                            'status'=> $status
                        ];
                    
                        PriceNotification::where('id',$id_pn)->update($data);
                     $id = $input['id_spare'][$key];
                     $record = DB::table('spare_details')->where('id',$id)->first();
                     $exist = $record->amount;
                     $arr['amount'] = $input['amount'][$key] +$exist;
                     $sparein['id_spare'] = $input['id_spare'][$key];
                     $sparein['id_notification'] = $input['id_pn'];
                     $sparein['amount_in'] =  $input['amount'][$key];
                     $sparein['price_in'] =  $input['price_in'][$key];
                     $sparein['all_in'] =       $sparein['amount_in']*  $sparein['price_in'] ;
                     SpareIn::create($sparein);
                     $spare_detail->where('id',$id)->update($arr);
                 
             }     
             return redirect()->route('admin.sparein.index',$id_pn);
  
    
    }
    public function search(Request $request){
        if($request->ajax())
            {
                $output="";
                $sparein= DB::table('spare_ins')->where('created_at','LIKE','%'.$request->date_in.'%')->get();
                if($sparein)
                {
                    foreach ( $sparein as $key => $val) {
                    $output.='<tr>'.
                    '<td>'.$val->details->dspare->name_spare.'-'.$val->details->dsupplier->name. '-'.$val->details->dtype->serial.'-'.$val->details->dtype->model.'</td>'.
                    '<td>'.$val->details->dspare->unit.'</td>'.
                    '<td>'.$val->amount_in.'</td>'.
                    '<td>'.$val->price_in.'</td>'.
                    '<td>'.$val->ins->created_at.'</td>'.
                    '<td>'.$val->id_notification.'</td>'.
                    '</tr>';
                }
          
                return Response($output);

                }
            }  
    }
}