<?php

namespace App\Http\Controllers\Backend\SparePart;
use App\SparePart;
use App\Supplier;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule; 

class SparePartController extends Controller
{
    public function out(){
        $spare = SparePart::all();
   
        return view('backend.spare.out',compact('spare'));
    }
 

}
