<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Attendance;
use Illuminate\Support\Str;
class ScanController extends Controller
{
    public function scan(){
        $user = Auth::user();
        return view('scan',compact('user'));
   
    }
}
