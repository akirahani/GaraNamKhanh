<?php

namespace App;

use App\Http\Controllers\GroupShift;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    public $timestamps = false;
    const SHIFT_OVERTIME = 0    ;
    protected $table = 'shift';
    protected $fillable = [
        'name','start_time', 'end_time','group_id'
    ];
    // public function members()
    // {
    //   return $this->belongsToMany(Member::class)->withPivot('date');
    // }

}
