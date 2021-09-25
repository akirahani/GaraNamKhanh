<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoutSpare extends Model
{
    protected $table = 'fout_spares';
    protected $fillable = [
        'id_spare','id_fout'
    ];
}
