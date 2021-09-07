<?php

namespace App;
use App\SpareDetail;
use Illuminate\Database\Eloquent\Model;

class TypeSpare extends Model
{
    protected $table = 'type_spares';
    protected $fillable = [
        'serial','model'
    ];
 
}
