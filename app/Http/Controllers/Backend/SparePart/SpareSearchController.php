<?php

namespace App\Http\Controllers\Backend\SparePart;
use App\Reference;
use App\Supplier;
use App\TypeSpare;
use App\Work;
use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpareSearchController extends Controller
{
    public function index(){
        $references =  Reference::all();
        $suppliers = Supplier::all();
        $types= TypeSpare::all();
        return view('backend.spare.search.index',compact('references','suppliers','types'));
    }
    public function insert(){
         $supplier =Supplier::all();
         $type_spares =TypeSpare::all();
        return view('backend.spare.search.create',compact('supplier','type_spares'));
    }
    public function store(Request $request){
        $input= $request->all();
        // dd($input);
        $supplier = new Supplier;
        $type_spares = new TypeSpare;
        foreach($input['name_spare'] as $key=>$val){
                $data['name_spare'] = $input['name_spare'][$key];
                $data['unit'] = $input['unit'][$key];
                $data['amount_reference'] = $input['amount_reference'][$key];
                $data['price_reference'] = $input['price_reference'][$key];
                $data['pay_reference'] = $input['pay_reference'][$key];
                $data['total_pay'] = $input['pay_reference'][$key] *$input['amount_reference'][$key];
                $supplier->id = $input['id_supplier'][$key];
                $type_spares->id = $input['id_type'][$key];
                $references = Reference::create($data);
                $references->supplier()->attach($input['id_supplier'][$key]);
                $references->type()->attach($input['id_type'][$key]);
        }
        return redirect()->route('backend.spare.search.index');
    }

    public function delete($id, Reference $reference){
        $reference->where('id',$id)->delete();
        return response()->json([
            'success'=>'Xóa PT tham khảo thành công'
        ]);
    }

    
}
