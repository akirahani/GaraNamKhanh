<?php

namespace App\Http\Controllers\Backend\Work;
use App\Reference;
use App\Supplier;
use App\TypeSpare;
use App\Work;
use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkSearchController extends Controller
{
    public function index(){
   
        return view('backend.spare.search.work');
    }
    public function insert_work(Request $request){
        $input= $request->all();
       
        foreach($input['name_work'] as $k =>$value){
            $arr['name_work'] = $input['name_work'][$k];
            $arr['wage'] = $input['wage'][$k];
           \App\Work::create($arr);
        }
        return redirect()->route('admin.detailws.index');
    }
    public function destroy($id, Work $work){
        $work->where('id',$id)->delete();
        return response()->json([
            'success'=>'Xóa công việc thành công'
        ]);
    }
}
