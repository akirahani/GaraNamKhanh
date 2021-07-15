<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Config;
use App\Helpers\UserSystemInfoHelper;

class QrcodeController extends Controller
{
    public function index(Request $request){
        $config = Config::all();
        //if( UserSystemInfoHelper::get_device() != 'Mobile'){
            return view('frontend.generate.index',compact('config'));
        //}

    }

    public function update(Request $request){
        $config = Config::all()->first();
        $config->session = $request->input; 
        $config->save();
        
    }
}
