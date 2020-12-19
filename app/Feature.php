<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    //relationfor product
    public function product() {
      return $this->belongsTo('App/Product');
    }
}
