<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
class Product extends Model
{
    use SearchableTrait;
    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'products.name' => 10,
            'products.details' => 9,
            'products.description' => 8,

        ],
    ];
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
