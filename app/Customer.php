<?php

namespace App;
use App\PriceNotification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    protected $table = 'customers';
    protected $fillable = [
        'name', 'address', 'phone' ,'email', 'password','avatar', 'segment','birthday','business_infomation','related_infomation'
    ];
    CONST segment = [['id'=>0,'name'=>'Khách mới'],['id'=>1,'name'=>'Khách hàng tiềm năng'],['id'=>2,'name'=>'Khách hàng thân thiết'],['id'=>3,'name'=>'Khách hàng VIP']];
    public function price_notification()
    {
        return $this->hasMany(PriceNotification::class,'customer_id');
    }
    public function car()
    {
        return $this->hasMany(Car::class);
    }
    // 
    public function book()
    {
        return $this->hasMany(Book::class,'customer_id');
    }
}
