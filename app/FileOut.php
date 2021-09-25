<?php

namespace App;
use App\FoutSpare;
use App\SpareDetail;
use Illuminate\Database\Eloquent\Model;

class FileOut extends Model
{
    protected $table = 'file_outs';
    protected $fillable = [
        'id_customer','status'
    ];
    CONST wait = ['id'=>0, 'name'=>'Chờ xuất'];
    CONST accept = ['id'=>1, 'name'=>'Đã Xuất'];
    CONST cancel = ['id'=>2, 'name'=>'Hủy'];
    public function fout_spare(){
        return $this->belongsToMany(SpareDetail::class,'fout_spares','id_fout','id_spare');
    }
    public function customer(){
        return $this->belongsTo(Customer::class,'id_customer');
    }
}
