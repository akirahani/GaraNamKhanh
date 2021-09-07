<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PnSpare extends Model
{
    protected $table = 'pn_spares';
    protected $fillable = [
      'pn_id','spare_id'
    ];
}
