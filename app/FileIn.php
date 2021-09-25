<?php

namespace App;
use App\SpareDetail;
use App\FinSpare;
use App\SpareIn;
use Illuminate\Database\Eloquent\Model;

class FileIn extends Model
{
    protected $table = 'file_ins';
    protected $fillable = [
        'id_sparein','status'
    ];
    CONST wait = ['id'=>0, 'name'=>'Chờ giao hàng'];
    CONST accept = ['id'=>1, 'name'=>'Đồng ý'];
    CONST cancel = ['id'=>2, 'name'=>'Hủy'];
    public function fin_spare(){
        return $this->belongsToMany(SpareDetail::class,'fin_spares','id_fin','id_spare');
    }
    public function in(){
        return $this->belongsTo(SpareIn::class,'id_filein');
    }
}
