<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupshift extends Model
{
    public $timestamps = false;
    protected $table = 'group_shift';
    protected $fillable = [
        'name',
    ];
    public function members()
    {
      return $this->belongsToMany(Member::class)->withPivot('date');
    }
}
