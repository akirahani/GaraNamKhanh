<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';
    protected $fillable = [
        'license_plate','name','engine','chassis','color','id_company','id_type','customer_id','year_manufacture'
    ];
    public function company(){
        return $this->belongsTo(InsuranceCompany::Class,'id_company');
      } 
    public function type_car(){
    return $this->belongsTo(CarType::Class,'id_type');
    } 
    public function custom(){
        return $this->belongsTo(Customer::Class,'customer_id');
        } 
}
