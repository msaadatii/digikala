<?php

use Illuminate\Database\Seeder;
use App\Feature;
class FeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Feature::create([
          'name'=>' ظرفیت حافظه ',
          'value'=>'4 گیگابایت',
          'product_id'=>1  ]);

          Feature::create([
            'name'=>'ظرفیت حافظه داخلی ',
            'value'=>'500 گیگابایت',
            'product_id'=>1  ]);

            Feature::create([
              'name'=>'سازنده پردازنده گرافیکی  ',
              'value'=>'intel ',
              'product_id'=>1  ]);

              Feature::create([
                'name'=>'اندازه صفحه نمایش ',
                'value'=>' 13اینچ',
                'product_id'=>1  ]);

            Feature::create([
              'name'=>'سری پردازنده ',
              'value'=>' Corei5',
              'product_id'=>1  ]);





    }
}
