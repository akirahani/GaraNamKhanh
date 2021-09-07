<?php

namespace App;
use App\SpareDetail;
use Illuminate\Database\Eloquent\Model;
use App\TypeSpare;
use App\Supplier;
class Reference extends Model
{
    protected $table = 'references';
    protected $fillable = [
        'name_spare','unit'
    ];


}
