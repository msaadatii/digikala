<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function presentPrice($price){

        return number_format($price);

    }
    //the categories one product
    public function categories(){

      return $this->belongsToMany('App\Category');

    }
      //featurs
    public function features(){
      return $this->hasMany('App\Feature');

    }

}
