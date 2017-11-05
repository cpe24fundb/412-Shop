<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'id' => 1,
            'product_category_id' => 101,
            'retail_price' => 15.0,
            'name' => 'Nama Matcha Corn Snack',
            'description' => '7-select snack',
            'ian' => '7612100053805',
            'image' => '/image/no_image.svg',
            'created_at' => '2017-10-25 11:59:59',
            'updated_at' => '2017-10-25 11:59:59',
            'image' => 'https://pbs.twimg.com/media/DIUQ8ibUEAAyc5k.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 2,
            'product_category_id' => 102,
            'retail_price' => 10.0,
            'name' => 'LUSH',
            'description' => 'Chocolate Chewy Candy',
            'ian' => '2212100053805',
            'image' => '/image/no_image.svg',
            'created_at' => '2017-10-24 10:00:23',
            'updated_at' => '2017-10-24 10:00:23',
            'image' => 'https://secure.ap-tescoassets.com/assets/TH/035/8850309140035/ShotType1_328x328.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 3,
            'product_category_id' => 101,
            'retail_price' => 9.0,
            'name' => 'Chocolate Custard Bun',
            'description' => 'fram house chocolate bun',
            'ian' => '5661100874326',
            'image' => '/image/no_image.svg',
            'created_at' => '2017-10-27 8:00:11',
            'updated_at' => '2017-10-27 8:00:11',
            'image' => 'http://www.farmhouse.co.th/uploads/products/2015/4/1429513646.png'
        ]);

        DB::table('products')->insert([
            'id' => 4,
            'product_category_id' => 102,
            'retail_price' => 17.0,
            'name' => 'Mentos Incredible Chew',
            'description' => 'mentos incredible chew grape flavour',
            'ian' => '8345683312456',
            'image' => '/image/no_image.svg',
            'created_at' => '2017-10-28 9:30:45',
            'updated_at' => '2017-10-28 9:30:45',
            'image' => 'https://www.waangoo.com/content/images/thumbs/0010320_mentos-incredible-chew-grape_600.jpeg'
        ]);

        DB::table('products')->insert([
            'id' => 5,
            'product_category_id' => 101,
            'retail_price' => 75.0,
            'name' => 'durex',
            'description' => 'condom',
            'ian' => '0145123435678',
            'image' => '/image/no_image.svg',
            'created_at' => '2017-11-1 00:54:39',
            'updated_at' => '2017-11-1 00:54:39',
            'image' => 'https://grandcondom.com/image/cache/data/durex-comfort/durex-comfort-zoom-750x750.jpg'
        ]);
    }
}
