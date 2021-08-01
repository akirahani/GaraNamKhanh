<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class Member extends Authenticatable
{
    use HasApiTokens;
    protected $table = 'member';
    protected $fillable = [
        'name', 'email', 'password','token'
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
