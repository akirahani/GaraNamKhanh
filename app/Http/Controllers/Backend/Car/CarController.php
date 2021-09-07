<?php

namespace App\Http\Controllers\Backend\Car;
use App\Car;
use App\CarType;
use App\Customer;
use App\InsuranceCompany;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        $car = Car::all();
        return view('backend.car.infomation.index',compact('car'));
    }
    public function insert(Request $request){
        $company = InsuranceCompany::all();
        $type =  CarType::all();
        $customers = Customer::all();
        return view('backend.car.infomation.insert',compact('company','type','customers'));
    }
    public function edit($id){
        $car = Car::find($id);
        $type = CarType::all();
        $customers = Customer::all();
        $company = InsuranceCompany::all();
        return view('backend.car.infomation.edit',compact('car','company','type','customers'));
    }
    public function store(Request $request){
        $car = new Car;
        $input = $request->all();
        $this->validate($request,[
            'license_plate'=>'required|unique:cars|min:8',
            'engine'=>'required|unique:cars|min:7',
            'chassis'=>'required|unique:cars|min:5',
            'name'=>'required',
            'color'=>'required',
            'year_manufacture'=>'required',
            'run_distance'=>'required',
            'id_type'=>'required',
            'id_company'=>'required',
            'customer_id'=>'required',
        ]);
  
        $car->name = $input['name'];
        $car->license_plate = $input['license_plate'];
        $car->color= $input['color'];
        $car->year_manufacture = $input['year_manufacture'];
        $car->engine = $input['engine'];
        $car->chassis = $input['chassis'];
        $car->run_distance = $input['run_distance'];
     
        $car->id_company = $input['id_company'];
        $car->id_type = $input['id_type'];
        $car->customer_id = $input['customer_id'];
        $car->save();
        return redirect()->route('admin.car.index');
    }
    public function update(Request $request,Car $car){
        $input = $request->all();
        $this->validate($request,[
            // 'license_plate'=>'required|unique:cars|min:8',
            // 'engine'=>'required|unique:cars|min:7',
            // 'chassis'=>'required|unique:cars|min:5',
            'name'=>'required',
            'color'=>'required',
            'year_manufacture'=>'required',
            'run_distance'=>'required',
            'id_type'=>'required',
            'id_company'=>'required',
        ]);
     
        $id = $input['id'];
        $name = $input['name'];
        // $license_plate = $input['license_plate'];
        $color= $input['color'];
        $year_manufacture = $input['year_manufacture'];
        // $engine = $input['engine'];
        // $chassis = $input['chassis'];
        $run_distance = $input['run_distance'];
        $id_company = $input['id_company'];
        $id_type = $input['id_type'];
        $data = [
            'name'=>$name,
            // 'license_plate'=>$license_plate,
            'color'=>$color,
            'year_manufacture'=>$year_manufacture,
            // 'engine'=>$engine,
            // 'chassis'=> $chassis,
            'run_distance'=>$run_distance,
            'id_company'=>$id_company,
            'id_type'=>$id_type
        ];
        $car->find($id)->update($data);
        return redirect()->route('admin.car.index');
    }
    public function delete($id,Car $car){
        $car->where('id',$id)->delete();
        return response()->json([        
            'success'=>'Xóa xe thành công'
        ]); 
    }
}
