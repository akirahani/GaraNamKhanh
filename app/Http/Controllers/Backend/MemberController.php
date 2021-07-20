<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    public function index(){
        $member = Member::paginate(10);
        return view('backend.member.view',compact('member'));
    }
    public function create(){
        return view('backend.member.create');
    }
    public function store(Request $request){
        $member = new Member();
        $member->name = $request->name;
        $member->email = $request->email;
        $member->password = Hash::make($request->password);
        $member->save();
        return redirect()->route('backend.member.view');
    }
    public function edit($id){
        $member = Member::find($id);
        return view('backend.member.edit')->with('member',$member);
    }
    public function update(Request $request,Member $member){
        
        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');
        $password =bcrypt($request->input('password'));
        $data = array(
            'name' => $name,
            'email' => $email,
            'password'=>$password,
     
        );
       $member->where('id',$id)->update($data); 
        return redirect()->route('backend.member.view');
    }
    public function destroy($id, Member $member){
        $member->where('id',$id)->delete();
        return response()->json([
            'success'=>'Acccount has been delete'
        ]); 
    }
}
