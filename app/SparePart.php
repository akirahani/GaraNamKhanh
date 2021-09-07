<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SpareDetail;
use App\PriceNotification;
class SparePart extends Model
{
    protected $table = 'spare_parts';
    protected $fillable = [
        'id_spare','id_notification','amount_out','unit_price','total_price'
    ];

    public function outs(){
        return $this->belongsTo(PriceNotification::class,'id_notification');
    }
    public function dout(){
        return $this->belongsTo(SpareDetail::class,'id_spare');
    }
}
