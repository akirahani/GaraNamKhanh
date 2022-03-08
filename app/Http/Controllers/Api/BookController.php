<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Schedule;
use App\Customer;
use Illuminate\Http\Response;
class BookController extends Controller
{
  
    public function update(Request $request){
        if($request->ajax()){
            if($request->type=='update'){
              $schedule = Schedule::find($request->id)->update([
                  'status' =>$request->status,
                ]);
                return response()->json([
                    'Quý khách đã đặt lịch thành công'
                ]); 
            }
    }

    


}