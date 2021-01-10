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
        //باتری قلمی آلکالاین
      Feature::create([
          'name'=>'تعداد باتری های موجود در پک ',
          'value'=>'2 عدد',
          'product_id'=>1  ]);

      Feature::create([
            'name'=>'نوع باتری ',
            'value'=>'AA',
            'product_id'=>1  ]);

      Feature::create([
              'name'=>'نوع تکنولوژی باتری ' ,
              'value'=>'آلکالاین ',
              'product_id'=>1  ]);

      Feature::create([
                'name'=>'قابلیت شارژ مجدد ',
                'value'=>' 13اینچ',
                'product_id'=>1  ]);

        //هدفون بی سیم نیا

      Feature::create([
          'name'=>' نوع اتصال ',
          'value'=>'بی سیم و باسیم',
          'product_id'=>2  ]);
      Feature::create([
          'name'=>' نوع گوشی',
          'value'=>'دو گوشی',
          'product_id'=>2  ]);
      Feature::create([
          'name'=>' مناسب برای',
          'value'=>'مکالمه ، ورزش ، گیمینگ ، کاربری عمومی',
          'product_id'=>2  ]);
      Feature::create([
            'name'=>'رابط ',
            'value'=>'جک 3.5 میلیمتری و بلوتوث',
            'product_id'=>2  ]);
      Feature::create([
            'name'=>' باتری',
            'value'=>'دارد',
            'product_id'=>2  ]);

            // شارژر فندکی
      Feature::create([
              'name'=>' شدت جریان خروجی',
              'value'=>'1.5 میلیمتری',
              'product_id'=>3  ]);
      Feature::create([
          'name'=>' تعداد درگاه خروجی',
          'value'=>'3',
          'product_id'=>3  ]);
      Feature::create([
            'name'=>' کابل همراه',
            'value'=>'ندارد',
            'product_id'=>3  ]);

        //   فلش مموری ایکس انرژی
      Feature::create([
              'name'=>' ظرفیت',
              'value'=>'64 گیگابایت',
              'product_id'=>4  ]);
      Feature::create([
              'name'=>'مقاومت در برابر ضربه ',
              'value'=>'بله',
              'product_id'=>4  ]);

        //   پایه نگهدارنده گوشی و تبلت
      Feature::create([
            'name'=>'مناسب برای',
            'value'=>'تمامی گوشی ها',
            'product_id'=>5  ]);

      Feature::create([
            'name'=>' وزن',
            'value'=>'64گرم',
            'product_id'=>5  ]);

      Feature::create([
                'name'=>' جنس',
                'value'=>'پلاستیک',
                'product_id'=>5  ]);

            //قلم لمسی تاچ پن
      Feature::create([
                    'name'=>' وزن',
                    'value'=>'18 گرم',
                    'product_id'=>6  ]);
      Feature::create([
                        'name'=>'مشخصات',
                        'value'=>'تطابق با صفحه نمایش های لمسی خازنی',
                        'product_id'=>6  ]);

              //گوشی موبایل نوکیا مدل 106
      Feature::create([
                        'name'=>'حافظه داخلی ',
                        'value'=>'4 مگابایت',
                        'product_id'=>7  ]);
      Feature::create([
                    'name'=>'رم ',
                      'value'=>'4 مگابایت',
                      'product_id'=>7  ]);

      Feature::create([
                          'name'=>'تعداد سیم کارت',
                          'value'=>'2',
                          'product_id'=>7  ]);


                        // برچسب حروف فارسی کیبورد
      Feature::create([
                        'name'=>' وزن',
                          'value'=>'1گرم',
                          'product_id'=>8  ]);


      Feature::create([
                            'name'=>' مشخصات',
                            'value'=>'سازگار با کلیه کیبورد ها',
                            'product_id'=>8  ]);

        //نظم دهنده سیم و کابل
        Feature::create([
            'name'=>' ابعاد',
            'value'=>'طول 2 متر و قطر22 میلی متر',
            'product_id'=>9  ]);
        Feature::create([
              'name'=>'وزن',
              'value'=>'200 گرم',
              'product_id'=>9  ]);

        //هدفون بی سیم مدل inpods 12
        Feature::create([
            'name'=>'نوع اتصال',
            'value'=>'بی سیم',
            'product_id'=>10  ]);

        Feature::create([
            'name'=>'نوع گوشی',
            'value'=>'دوگوشی',
            'product_id'=>10  ]);

        Feature::create([
            'name'=>'رابط',
            'value'=>'لایتینگ ،بلوتوث',
            'product_id'=>10  ]);

        //ریمل حجم دهنده مای
        Feature::create([
            'name'=>'ضد آب',
            'value'=>'خیر',
            'product_id'=>11  ]);

        Feature::create([
              'name'=>'حجم',
              'value'=>'15میلی لیتر',
              'product_id'=>11  ]);

        Feature::create([
              'name'=>'کشور مبدا برند',
              'value'=>'ایران',
              'product_id'=>11  ]);

      //شامپو مردانه ضدشوره کلیر
        Feature::create([
              'name'=>'مخصوص',
              'value'=>'موهای چرب',
              'product_id'=>12  ]);

        Feature::create([
             'name'=>'مناسب برای',
             'value'=>'آقایان',
             'product_id'=>12  ]);

       Feature::create([
            'name'=>'ویتامین',
            'value'=>'ندارد',
            'product_id'=>12  ]);

       //آفتاب گیر شیشه خودرو
       Feature::create([
          'name'=>'مناسب برای',
          'value'=>'شیشه جلو',
          'product_id'=>13  ]);

       //کاپشن مردانه ماییلدا
       Feature::create([
          'name'=>'جنس',
          'value'=>'پلی استر',
          'product_id'=>14  ]);

       Feature::create([
          'name'=>'یقه',
          'value'=>'ایستاده',
          'product_id'=>14  ]);
       //سرویس 3 پارچه کفگیر ملاقه
       Feature::create([
          'name'=>'مشتمل بر',
          'value'=>'کفگیر،چنگال',
          'product_id'=>15  ]);

       Feature::create([
          'name'=>'پایه',
          'value'=>'ندارد',
          'product_id'=>15  ]);
       //جارو برقی پاکشوما
       Feature::create([
          'name'=>'لوله تلسکوپی',
          'value'=>'دارد',
          'product_id'=>16  ]);

       Feature::create([
          'name'=>'سیم جمع کن خودکار',
          'value'=>'دارد',
          'product_id'=>16  ]);

      Feature::create([
          'name'=>'تعداد سری',
          'value'=>'3 عدد',
          'product_id'=>16  ]);
      // کتاب قلعه حیوانات
      Feature::create([
          'name'=>'قطع',
          'value'=>'رقعی',
          'product_id'=>17  ]);
     //اسباب بازی کوکی
      Feature::create([
          'name'=>'باتری',
          'value'=>'ندارد',
          'product_id'=>18  ]);
       //تفنگ اسباب بازی
       Feature::create([
          'name'=>'رده سنی',
          'value'=>'کودکان ، خردسالان',
          'product_id'=>19  ]);
       //دمبل رکورد 2 کیلو گرمی
       Feature::create([
            'name'=>'قابلیت اضافه کردن وزنه',
            'value'=>'ندارد',
            'product_id'=>20  ]);

       //قهوه فوری 20 عددی
       Feature::create([
            'name'=>'وزن',
            'value'=>'20 گرم',
            'product_id'=>21  ]);





    }
}
