<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
  protected $fillable = [
    'name', 'value'
  ];

  public function product(){
    return $this->belongsTo('App\Product');
  }
}
