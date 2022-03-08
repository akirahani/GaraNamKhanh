<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedules';
    protected $fillable = [
        'customer_id','start_time','end_time','status','content'
    ];
    CONST status1 = ['id'=>0 , 'name'=>'Khách chờ xác nhận'];// khách gửi thông tin vào lịch của gara
    CONST status2 = ['id'=>1 , 'name'=>'Gara gợi ý lịch']; // phản hồi khách khi lịch của khách đặt k đc gara đáp ứng
    CONST status3 = ['id'=>2 , 'name'=>'Đã xác nhận']; // gara đáp ứng đc thời gian của khách và cập nhật lịch gara
    CONST status4 = ['id'=>3 , 'name'=>'Đồng ý']; // đồng ý tại thời điểm nhắc lịch cho khách hàng
    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id');
    }
}
