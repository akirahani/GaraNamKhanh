<?php

namespace App;
use App\Reference;
use App\Supplier;

use Illuminate\Database\Eloquent\Model;

class SpareDetail extends Model
{
    protected $table = 'spare_details';
    protected $fillable = [
        'id_spare','id_supplier','amount','price_reference'
    ];
    public function dspare(){
        return $this->belongsTo(Reference::class,'id_spare');
    }
    public function dsupplier(){
       return  $this->belongsTo(Supplier::class,'id_supplier');
    }
    public function spare_in(){
        return  $this->hasMany(SpareIn::class,'id_spare');
     }

}
