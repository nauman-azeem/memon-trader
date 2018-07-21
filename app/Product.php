<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
    'name', 'description'
  ];

  public function brand(){
    return $this->belongsTo('App\Brand');
  }

  public function category(){
    return $this->belongsTo('App\Category');
  }

  public function subcategory(){
    return $this->belongsTo('App\Subcategory');
  }

  public function features(){
    return $this->hasMany('App\Feature');
  }

  public function getDiscountedPrice(){
    switch ($this->discount_type){
      case 0:{
        return $this->price;
        break;
      }
      case 1:{
        return ($this->price - $this->discount_amount);
        break;
      }
      case 2:{
        return ($this->price - ($this->price * ($this->discount_amount/100)));
        break;
      }
      default:{
        return $this->price;
        break;
      }
    }
  }

  public function getFormalDiscount(){
    if($this->discount_type == 1){
      return $this->discount_amount . "Rs.";
    } elseif($this->discount_type == 2){
      return $this->discount_amount . " %";
    } else {
      return "0";
    }
  }
}