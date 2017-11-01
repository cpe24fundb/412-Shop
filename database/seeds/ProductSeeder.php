<?php

use Illuminate\Database\Seeder;

class PostsCategoriesTableSeeder extends Seeder
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
            'retai_proce' => 15.0,
            'name' => 'Nama Matcha Corn Snack',
            'description' => '7-select snack',
            'created_at' => '2017-10-25 11:59:59',
            'updated_at' => '2017-10-25 11:59:59'
        ]);

        DB::table('products')->insert([
            'id' => 2,
            'product_category_id' => 101,
            'retali_price' => 10.0,
            'name' => 'LUSH',
            'description' => 'Chocolate Chewy Candy',
            'created_at' => '2017-10-24 10:00:23',
            'updated_at' => '2017-10-24 10:00:23'
        ]);

        DB::table('products')->insert([
            'id' => 3,
            'product_category_id' => 101,
            'retail_price' => 9.0,
            'name' => 'Chocolate Custard Bun',
            'description' => 'fram house chocolate bun',
            'created_at' => '2017-10-27 8:00:11',
            'updated_at' => '2017-10-27 8:00:11'
        ]);

        DB::table('products')->insert([
            'id' => 4,
            'product_category_id' => 102,
            'retail_price' => 17.0,
            'name' => 'Mentos Incredible Chew',
            'description' => 'mentos incredible chew grape flavour',
            'created_at' => '2017-10-28 9:30:45',
            'updated_at' => '2017-10-28 9:30:45'
        ]);

        DB::table('products')->insert([
            'id' => 5,
            'product_category_id' => 102,
            'retail_price' => 75.0,
            'name' => 'durex',
            'description' => 'condom',
            'created_at' => '2017-11-2 00:54:39',
            'updated_at' => '2017-11-2 00:54:39'
        ]);
    }
}
