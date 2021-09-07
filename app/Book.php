<?php

namespace App;
use App\Customer;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = [
      'hour','day','run_distance','status','want','customer_id'
    ];
    const status_pending = ['id'=> 0,'name'=> 'Chờ xác nhận'];
    const status_success = ['id'=> 1,'name'=> 'Chấp thuận'];
    const status_other = ['id'=> 2,'name'=> 'Không chấp thuận'];
    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id');
    }
    
}
