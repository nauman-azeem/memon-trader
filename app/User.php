<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  protected $fillable = [
    'name', 'email', 'password',
  ];
  protected $hidden = [
    'password', 'remember_token',
  ];
  public function isAdmin(){
    if($this->email == "admin@memontrader.com"){
      return true;
    }
    return false;
  }
}
