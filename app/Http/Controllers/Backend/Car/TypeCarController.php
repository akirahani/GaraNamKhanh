<?php

namespace App\Http\Controllers\Backend\Car;
use App\CarType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TypeCarController extends Controller
{
    public function index(){
        $car = CarType::all();
        return view('backend.car.car_type.index',compact('car'));
    }
    public function insert(Request $requset){
        return view('backend.car.car_type.insert');
    }
    public function store(Request $requset){
        $input= $requset->all();
        foreach($input['name_type'] as $key=>$val){
            $arr['name_type']= $input['name_type'][$key];
            $arr['vehicles']= $input['vehicles'][$key];
            CarType::create($arr);
        }

        return redirect()->route('admin.car.type.index');
    }
    public function edit($id){
        $type = CarType::find($id);
        return view('backend.car.car_type.edit',compact('type'));
    }
    public function update(Request $requset, CarType $type){
        $input= $requset->all();
        $id = $input['id'];
        $name_type = $input['name_type'];
        $vehicles = $input['vehicles']; 
        $data = [
            'vehicles'=> $vehicles,
            'name_type'=> $name_type
        ];
        $type->where('id',$id)->update($data);
        return redirect()->route('admin.car.type.index');
    }
    public function delete($id,CarType $type){
        $type->where('id',$id)->delete();
        return response()->json([        
            'success'=>'Xóa loại xe thành công'
        ]); 
    }
}
