<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;
use Auth;
class GenerateCodeController extends Controller
{
    public function index(Request $request){
        $user = Auth::user(); 
        $request->session()->put(['qr'=>bcrypt(Str::random(20))]);
         $qrc= QrCode::size(200)->generate(session()->get('qr'));
         return view('display_qr',compact('qrc','user'));
    }  
}
