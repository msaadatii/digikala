<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

  //change table name from categories to category
  protected $table = 'category';


    //the products inside one category
    public function products(){

      return $this->belongsToMany('App\Product');

    }
}
