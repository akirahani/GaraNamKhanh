<?php

namespace App;
use App\SpareDetail;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';
    protected $fillable = [
        'name','address','phone','email','website','tax_code'
    ];
}
