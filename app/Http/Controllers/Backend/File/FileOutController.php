<?php

namespace App\Http\Controllers\Backend\File;
use App\SparePart;
use App\PriceNotification;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileOutController extends Controller
{
    
    public function index()
    { 
             $pns = PriceNotification::all();
            return view('backend.spare.file.file_out',compact('pns'));
    }
    public function detail($id)
    {
        $pns = PriceNotification::find($id);
        return view('backend.spare.file.out_detail',compact('pns'));
    }
}
