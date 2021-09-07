<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PriceNotification;
class SpareIn extends Model
{
    protected $table = 'spare_ins';
    protected $fillable = [
        'content','id_spare','id_notification','amount_in','price_in','all_in'
    ];
    public function ins(){
        return $this->belongsTo(PriceNotification::class,'id_notification');
    }
    public function details(){
        return $this->belongsTo(SpareDetail::class,'id_spare');
    }
}
