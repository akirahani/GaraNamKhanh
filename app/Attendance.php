<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Attendance extends Model
{
    // public $timestamps = false;
    protected $table = 'attendance';
    protected $fillable = [
        'member_id',
        'time',
        'date',
    ];
}
