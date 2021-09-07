<?php

namespace App\Http\Controllers\Backend\SparePart;
use App\Reference;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index(){
        $references =  Reference::all();
        return view('backend.spare.base_spare.index',compact('references'));
    }
    public function insert(){
  
        return view('backend.spare.base_spare.insert');
    }
    public function store(Request $request){
        $input = $request->all();
        foreach($input['name_spare']  as $key=>$val){
            $references['name_spare']= $input['name_spare'][$key];
            $references['unit'] = $input['unit'][$key];
            Reference::create($references);
        }
        return redirect()->route('admin.spare.base');
    }
    public function edit($id){
        $references= Reference::find($id);
        return view('backend.spare.base_spare.edit',compact('references'));
    }
    public function update(Request $request,Reference $references){
        $id= $request->id;
        $name_spare = $request->name_spare;
        $unit = $request->unit;
        $data=[
            'name_spare'=>$name_spare,
            'unit'=>$unit
        ];
        $references->where('id',$id)->update($data);
        return redirect()->route('admin.spare.base');
    }
    public function delete($id,Reference $references){
        $references->where('id',$id)->delete();
        return response()->json([
            'Xóa thành công'
        ]);
    }
}
