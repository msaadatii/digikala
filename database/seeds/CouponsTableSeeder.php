<?php

use Illuminate\Database\Seeder;
use App\Coupon;
class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creat sample coupons in diffrent type
        Coupon ::create([

          'code'=>'yalda',
          'type'=>'fixed',
          'value'=>9000,
        ]);


        Coupon ::create([

          'code'=>'hidk',
          'type'=>'percent_off',
          'percent_off'=>30,
        ]);

    }
}
