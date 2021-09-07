<?php

namespace App\Http\Controllers\Backend\SparePart;
use App\TypeSpare;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpareTypeController extends Controller
{
    public function index(){
        $type_spares =  TypeSpare::all();
        return view('backend.spare.type.index',compact('type_spares'));
    }
    public function insert(){
  
        return view('backend.spare.type.create');
    }
    public function store(Request $request){
        $input = $request->all();
        foreach($input['serial']  as $key=>$val){
            $type_spare['serial'] = $input['serial'][$key];
            $type_spare['model'] = $input['model'][$key];
            TypeSpare::create($type_spare);
        }
        return redirect()->route('backend.spare.type.index');
    }
    public function edit($id){
        $type_spare = TypeSpare::find($id);
        return view('backend.spare.type.edit',compact('type_spare'));
    }
    public function update(Request $request,TypeSpare $type_spare ){
        $id= $request->id;
        $model = $request->model;
        $serial = $request->serial;
        $data=[
            'model'=>$model,
            'serial'=>$serial
        ];
        $type_spare->where('id',$id)->update($data);
        return redirect()->route('backend.spare.type.index');
    }
    public function delete($id,TypeSpare $type_spare ){
        $type_spare->where('id',$id)->delete();
        return response()->json([
            'Xóa thành công'
        ]);
    }
}
