<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
use App\Customer;
use Illuminate\Http\Response;
class BookController extends Controller
{
  
    public function store(Request $request){
        $book = new Book;
        $customer = new Customer;
        $book->hour = $request->hour;
        $book->day = $request->day;
        $book->run_distance = $request->run_distance;
        $book->status = 0;
        $book->want = $request->want;
        $book->customer_id = $request->customer_id;
        $book->customer($request->customer_id);
        $book->save();
        return response()->json([
            'Qúy khách đã đặt lịch, vui lòng chờ xác nhận'
        ]);
    }

    public function update(Request $request,Book $book){
        $id = $request['id'];
        $status =1;
        $data = [
            'status'=>$status
        ];
        $book->where('id',$id)->update($data);
        return response()->json([
            'Đặt lịch thành công'
        ]);
    }
    public function delete($id,Book $book){
        $book->find($id)->delete();
        return response()->json([
               "Bạn vui lòng chọn một mốc thời gian khác"
        ]);
    }
    


}