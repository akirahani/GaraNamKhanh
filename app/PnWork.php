<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PnWork extends Model
{
    protected $table = 'pn_works';
    protected $fillable = [
      'pn_id','work_id'
    ];
}
