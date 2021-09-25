<?php

namespace App\Http\Controllers\Backend\SparePart;
use App\SpareDetail;
use Illuminate\Support\Collection\load; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class SpareExistController extends Controller
{
    public function index(){
     
      
        $exists= DB::table('spare_details') 
        ->where("amount",">", 0)
        ->get();
        $exists = SpareDetail::hydrate($exists->toArray());

        return view('backend.spare.exist',compact('exists'));

     


    }

  
}
