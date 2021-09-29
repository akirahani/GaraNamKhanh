<?php

namespace App;

use App\Http\Controllers\GroupShift;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    public $timestamps = false;
    // const SHIFT_OVERTIME = 0    ;
    protected $table = 'shift';
    protected $fillable = [
        'start_time1', 'end_time1','start_time2', 'end_time2','overtime'
    ];

}
