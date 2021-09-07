<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsuranceCompany extends Model
{
    protected $table = 'insurance_companies';
    protected $fillable = [
        'name', 'phone','address','website','email'
    ];
}
