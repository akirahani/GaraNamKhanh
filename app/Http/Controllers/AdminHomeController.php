<?php

namespace App\Http\Controllers;
use App\User;
use App\Member;
use App\Attendance;
use App\Shift;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;
use DB;
use Session;
use Carbon\Carbon;

use Illuminate\Database\MySqlConnection ;

class AdminHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth:admin-web');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('admin.home');
    // }
//   calendar

// user 
//     public function table()
//     {
//         $records = User::all();

//         return view('admin.table',compact('records'));
//     }

  
//     public function insert(Request $request){
//         $user= new User;
//         $user->name =  $request->input('name');
//         $user->email = $request->input('email');
//         $user->password =bcrypt($request->input('password'));
//         $user->address = $request->input('address');
//         $user->phone = $request->input('phone');
//         $this->validate($request,[
//             'name'=>'required',
//             'email'=>'required',
//             'password'=>'required',
//             'address'=>'required',
//             'phone'=>'required'  

//         ],[
//             'name.required'=>'*Chưa nhập tên',
//             'email.required'=>'*Chưa nhập email ',
//             'password.required'=>'*Chưa nhập mật khẩu',
//             'address.required'=>'*Chưa nhập địa chỉ',
//             'phone.required'=>'*Chưa nhập số điện thoại',
//         ]);
   
//         $user->save();  
//         return redirect()->route('table');

//     }
//     public function edit($id){
//             $user = User::find($id);
//             return view('table_update',compact('user')); 
//     }
//     public function update(Request $request, User $user){
//         $id = $request->input('id');
//         $name = $request->input('name');
//         $email = $request->input('email');
//         $password =bcrypt($request->input('password'));
//         $address = $request->input('address');
//         $phone = $request->input('phone');

//         $data = array(
//             'name' => $name,
//             'email' => $email,
//             'password'=>$password,
//             'address'=>$address,
//             'phone'=>$phone
//         );
        
       
//        $user->where('id',$id)->update($data); 
//         return redirect()->route('table');
//     }
//     public function delete($id, User $user){

//         $user->where('id',$id)->delete();
//             return response()->json([
//                 'success'=>'Acccount has been delete'
//             ]); 
//     }
// // attendance 
//     public function attendance()
//     {
//         $attend = Attendance::all();
//         return view('admin.attendance',compact('attend'));
//     }

//     public function post(Request $request){
        
//             $attend= new Attendance;
//             $attend->id_user =  $request->user;
//             $attend->created_at = Carbon::now('Asia/Ho_Chi_Minh');
//             $attend->save(); 
//             return response()->json(array('success'=>$request->user));

//     }
    //report
  
}
