<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberShift extends Model
{
    
    public $timestamps = false;
    protected $table = 'member_shift';
    protected $fillable = [
        'member_id','group_id','date'
    ];
}
