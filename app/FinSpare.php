<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinSpare extends Model
{
    protected $table = 'fin_spares';
    protected $fillable = [
        'id_spare','id_fin','amount_in'
    ];
}

