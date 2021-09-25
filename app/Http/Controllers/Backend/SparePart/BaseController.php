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
        $references['name_spare']= $input['name_spare'];
        $references['unit'] = $input['unit'];
        $references['serial'] = $input['serial'];
        $references['model'] = $input['model'];
        $references['price'] = $input['price'];
        $references['rating'] = $input['rating'];
        $references['note'] = $input['note'];
        Reference::create($references);
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
        $serial = $request->serial;
        $model = $request->model;
        $price = $request->price;
        $rating = $request->rating;
        $note = $request->note;
        $data=[
            'name_spare'=>$name_spare,
            'unit'=>$unit,
            'serial'=>$serial ,
            'model'=>$model,
            'price'=>$price,
            'rating'=>$rating,
            'note'=>$note
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
