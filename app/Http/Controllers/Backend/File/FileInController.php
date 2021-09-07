<?php

namespace App\Http\Controllers\Backend\File;
use App\SpareIn;
use App\PriceNotification;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileInController extends Controller
{
    public function index(){
        $pns = PriceNotification::all();
        return view('backend.spare.file.file_in',compact('pns'));
    }
    public function detail($id){
        $pns = PriceNotification::find($id);
        return view('backend.spare.file.in_detail',compact('pns'));
    }
}
