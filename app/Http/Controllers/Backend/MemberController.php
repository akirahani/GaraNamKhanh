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
    public function update(Request $request, $id){
        $member = Member::find($id);
        $member->name = $request->name; 
        $member->email = $request->email;
        $member->save();
        return redirect()->route('backend.member.view');
    }
    public function destroy($id){
        $member = Member::find($id);
        $member->delete();
        return redirect()->back();
    }
}
