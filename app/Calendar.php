<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $table = 'calendars';
    protected $fillable = [
       'type_date'
       ,'date','title'
    ];
    const type_date = [[ 'id'=>1, 'name'=>'Ngày nghỉ' ],['id'=>2, 'name'=>'Ngày lễ']];
}
