<?php

namespace App;
use App\Work;
use App\Reference;
use App\Customer;
use App\RepairOrder;
use Illuminate\Database\Eloquent\Model;

class PriceNotification extends Model
{
    protected $table = 'price_notifications';
    protected $fillable = [
      'status','customer_id','assessor','final_price'
    ];
    const status_pending =['id'=>0,'name'=>'Chờ xác nhận'];
    const status_success =['id'=>1,'name'=>'Đồng ý'];
    const in =['id'=>2,'name'=>'Đã nhập'];
    public function work(){
      return $this->belongsToMany(Work::class,'pn_works','pn_id','work_id');
    }
    public function spare(){
      return $this->belongsToMany(SpareDetail::class,'pn_spares','pn_id','spare_id');
    }
    public function customer(){
      return $this->belongsTo(Customer::Class,'customer_id');
    } 
    public function in(){
      return $this->hasMany(SpareIn::class,'id_notification');
    }
    public function out(){
      return $this->hasMany(SparePart::class,'id_notification');
    }

}
