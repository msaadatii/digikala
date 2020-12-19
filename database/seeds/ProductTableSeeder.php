<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      //laptop category
        Product::create([
          'name'=>'MacBook Pro MD 101',
          'slug'=>'macbook-pro-md-101',
          'details'=>'13inch Monitor , 500GB SSD , 4GB RAM',
          'price'=>53799,
          'description'=>' Apple MacBook Pro MD101HN/A is a macOS laptop with a 13.30-inch display that has a resolution of 2560x1600 pixels. It is powered by a Core i5 processor and it comes with 4GB of RAM. The Apple MacBook Pro MD101HN/A packs 512GB of SSD storage.Connectivity options include Wi-Fi 802.11 ac, Bluetooth and it comes with 2 USB ports (2 x USB 3.0), Mic In ports.As of 12th November 2020, Apple MacBook Pro MD101HN/A price in India starts at Rs. 53,799.'
        ])->categories()->attach(1);

        Product::create([
          'name'=>'Asus N550JV',
          'slug'=>'asus-n550jv',
          'details'=>'15inch Monitor , 1TB SSD , 8GB RAM',
          'price'=>74999,
          'description'=>'Very good condition with minimal wear/signs of use. Quad core i7, 8gb ram, nvidia GTX850M. Windows 10 and charger included. This laptop is ready to plow through just about anything you throw at it. Buy from a trusted business--receive top quality!'
        ])->categories()->attach(1);

        Product::create([
          'name'=>'MacBook Air',
          'slug'=>'macbook-air',
          'details'=>'13inch Monitor , 500GB SSD , 8GB RAM',
          'price'=>29000,
          'description'=>'Apple-designed M1 chip for a giant leap in CPU, GPU, and machine learning performanceGo longer than ever with up to 18 hours of battery life.8-core CPU delivers up to 3.5x faster performance to tackle projects faster than ever.Up to eight GPU cores with up to 5x faster graphics for graphics-intensive apps and games.16-core Neural Engine for advanced machine learning.8GB of unified memory so everything you do is fast and fluid.FaceTime HD camera with advanced image signal processor for clearer, sharper video calls.'])->categories()->attach(1);

        Product::create([
          'name'=>'Acer v15 Nitro',
          'slug'=>'aser-v15-nitro',
          'details'=>'13inch Monitor , 500GB SSD , 4GB RAM',
          'price'=>53799,
          'description'=>' Apple MacBook Pro MD101HN/A is a macOS laptop with a 13.30-inch display that has a resolution of 2560x1600 pixels. It is powered by a Core i5 processor and it comes with 4GB of RAM. The Apple MacBook Pro MD101HN/A packs 512GB of SSD storage.Connectivity options include Wi-Fi 802.11 ac, Bluetooth and it comes with 2 USB ports (2 x USB 3.0), Mic In ports.As of 12th November 2020, Apple MacBook Pro MD101HN/A price in India starts at Rs. 53,799.'
        ])->categories()->attach(1);

        Product::create([
          'name'=>'Asus Zenbook UX 305',
          'slug'=>'asus-zenbook-ux-305',
          'details'=>'13inch Monitor , 500GB SSD , 4GB RAM',
          'price'=>53799,
          'description'=>' Apple MacBook Pro MD101HN/A is a macOS laptop with a 13.30-inch display that has a resolution of 2560x1600 pixels. It is powered by a Core i5 processor and it comes with 4GB of RAM. The Apple MacBook Pro MD101HN/A packs 512GB of SSD storage.Connectivity options include Wi-Fi 802.11 ac, Bluetooth and it comes with 2 USB ports (2 x USB 3.0), Mic In ports.As of 12th November 2020, Apple MacBook Pro MD101HN/A price in India starts at Rs. 53,799.'
        ])->categories()->attach(1);

        Product::create([
          'name'=>'Toshiba ChromeBook 2',
          'slug'=>'toshiba-chromebook-2',
          'details'=>'13inch Monitor , 500GB SSD , 4GB RAM',
          'price'=>53799,
          'description'=>' Apple MacBook Pro MD101HN/A is a macOS laptop with a 13.30-inch display that has a resolution of 2560x1600 pixels. It is powered by a Core i5 processor and it comes with 4GB of RAM. The Apple MacBook Pro MD101HN/A packs 512GB of SSD storage.Connectivity options include Wi-Fi 802.11 ac, Bluetooth and it comes with 2 USB ports (2 x USB 3.0), Mic In ports.As of 12th November 2020, Apple MacBook Pro MD101HN/A price in India starts at Rs. 53,799.'
        ])->categories()->attach(1);

        Product::create([
          'name'=>'HP Spectre x2 12-a002',
          'slug'=>'hp-spectre-x2',
          'details'=>'13inch Monitor , 500GB SSD , 4GB RAM',
          'price'=>53799,
          'description'=>' Apple MacBook Pro MD101HN/A is a macOS laptop with a 13.30-inch display that has a resolution of 2560x1600 pixels. It is powered by a Core i5 processor and it comes with 4GB of RAM. The Apple MacBook Pro MD101HN/A packs 512GB of SSD storage.Connectivity options include Wi-Fi 802.11 ac, Bluetooth and it comes with 2 USB ports (2 x USB 3.0), Mic In ports.As of 12th November 2020, Apple MacBook Pro MD101HN/A price in India starts at Rs. 53,799.'
        ])->categories()->attach(1);

        Product::create([
          'name'=>'Surface Pro4',
          'slug'=>'surface-pro4',
          'details'=>'13inch Monitor , 500GB SSD , 4GB RAM',
          'price'=>53799,
          'description'=>' Apple MacBook Pro MD101HN/A is a macOS laptop with a 13.30-inch display that has a resolution of 2560x1600 pixels. It is powered by a Core i5 processor and it comes with 4GB of RAM. The Apple MacBook Pro MD101HN/A packs 512GB of SSD storage.Connectivity options include Wi-Fi 802.11 ac, Bluetooth and it comes with 2 USB ports (2 x USB 3.0), Mic In ports.As of 12th November 2020, Apple MacBook Pro MD101HN/A price in India starts at Rs. 53,799.'
        ])->categories()->attach(1);

        Product::create([
          'name'=>'Acer Aspir E15',
          'slug'=>'acer-aspir-e15',
          'details'=>'13inch Monitor , 1TB SSD , 4GB RAM',
          'price'=>53799,
          'description'=>' Apple MacBook Pro MD101HN/A is a macOS laptop with a 13.30-inch display that has a resolution of 2560x1600 pixels. It is powered by a Core i5 processor and it comes with 4GB of RAM. The Apple MacBook Pro MD101HN/A packs 512GB of SSD storage.Connectivity options include Wi-Fi 802.11 ac, Bluetooth and it comes with 2 USB ports (2 x USB 3.0), Mic In ports.As of 12th November 2020, Apple MacBook Pro MD101HN/A price in India starts at Rs. 53,799.'
        ])->categories()->attach(1);

        Product::create([
          'name'=>'Macbook Pro MD 102',
          'slug'=>'macbook-pro-md-102',
          'details'=>'15inch Monitor , 500GB SSD , 4GB RAM',
          'price'=>53799,
          'description'=>' Apple MacBook Pro MD101HN/A is a macOS laptop with a 13.30-inch display that has a resolution of 2560x1600 pixels. It is powered by a Core i5 processor and it comes with 4GB of RAM. The Apple MacBook Pro MD101HN/A packs 512GB of SSD storage.Connectivity options include Wi-Fi 802.11 ac, Bluetooth and it comes with 2 USB ports (2 x USB 3.0), Mic In ports.As of 12th November 2020, Apple MacBook Pro MD101HN/A price in India starts at Rs. 53,799.'
        ])->categories()->attach(1);

        //personal appliance
        Product::create([
          'name'=>'My Black Diamond Luxurious Mascara',
          'slug'=>'my-black-diamond-luxurious-mascara',
          'details'=>'    ضد آب: خیر ',
          'price'=>79600,
          'description'=>'ریمل حجم دهنده مای سری Black Diamond مدل Luxurious در حجم 15 میلی‌لیتر عرضه شده و به زیبایی هرچه تمام‌تر چشمان شما کمک می‌کند. از ویژگی‌های این ریمل می‌توان به جداکننده مژه‌ها ، مشکی کننده و برس باریک با استفاده آسان اشاره کرد. '
        ])->categories()->attach(2);



    }
}
