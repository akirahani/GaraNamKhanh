<?php

namespace App;
use App\RepairOrder;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{   
    protected $table = 'works';
    protected $fillable = [
        'name_work','wage'
    ];


}
