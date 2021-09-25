<?php

namespace App;
use App\SpareDetail;
use Illuminate\Database\Eloquent\Model;

use App\Supplier;
class Reference extends Model
{
    protected $table = 'references';
    protected $fillable = [
        'name_spare','unit', 'serial','model','price','note','rating'
    ];
    CONST rating =[['id'=>0,'name'=>'Loại A'],['id'=>1,'name'=>'Loại B'],['id'=>2,'name'=>'Loại C'],['id'=>3,'name'=>'Loại D']];

}
