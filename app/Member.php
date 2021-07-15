<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    protected $table = 'member';
    protected $fillable = [
        'name', 'email', 'password'
    ];
    public function shifts()
    {
      return $this->belongsToMany(Shift::class);
    }
    public function groupshifts()
    {
      return $this->belongsToMany(Groupshift::class);
    }
}
