<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsuranceCompany extends Model
{
    protected $table = 'insurance_companies';
    protected $fillable = [
        'name', 'phone','address','website','email','tax_code','note','rating'
    ];
    CONST rating =[['id'=>0,'name'=>'Loại A'],['id'=>1,'name'=>'Loại B'],['id'=>2,'name'=>'Loại C'],['id'=>3,'name'=>'Loại D']];
}
