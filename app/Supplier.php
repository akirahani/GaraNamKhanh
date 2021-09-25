<?php

namespace App;
use App\SpareDetail;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';
    protected $fillable = [
        'name','address','phone','email','website','tax_code','note','rating'
    ];
    CONST rating =[['id'=>0,'name'=>'Loại A'],['id'=>1,'name'=>'Loại B'],['id'=>2,'name'=>'Loại C'],['id'=>3,'name'=>'Loại D']];
}
