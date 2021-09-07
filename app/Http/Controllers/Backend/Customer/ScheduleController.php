<?php

namespace App\Http\Controllers\Backend\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
class ScheduleController extends Controller
{
    public function index(){
        $book= Book::all();
        return view('backend.schedule.index',compact('book'));
    }
    public function delete($id,Book $book){
        $book->where('id',$id)->delete();
        return response()->json([
               "success"=>"book has been delete"
        ]);
    }
}
