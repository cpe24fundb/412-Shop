<?php

use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->delete();
        DB::table('product_categories')->insert([
            'id' => 101,
            'name' => 'Snack',
            'description' => 'snack',
            'created_at' => '2017-11-2 1:05:44',
            'updated_at' => '2017-11-2 1:05:44'
        ]);

        DB::table('product_categories')->insert([
            'id' => 102,
            'name' => 'Sweets',
            'description' => 'sweets',
            'created_at' => '2017-11-2 1:06:37',
            'updated_at' => '2017-11-2 1:06:37'
        ]);

        DB::table('product_categories')->insert([
            'id' => 103,
            'name' => 'Drinks',
            'description' => 'drinks',
            'created_at' => '2017-11-2 1:07:24',
            'updated_at' => '2017-11-2 1:07:24'
        ]);

        DB::table('product_categories')->insert([
            'id' => 104,
            'name' => 'Instant Food',
            'description' => 'instant food',
            'created_at' => '2017-11-2 1:08:15',
            'updated_at' => '2017-11-2 1:08:15'
        ]);

        DB::table('product_categories')->insert([
            'id' => 105,
            'name' => 'Consumable',
            'description' => 'consumable',
            'created_at' => '2017-11-2 1:12:42',
            'updated_at' => '2017-11-2 1:12:42'
        ]);

        DB::table('product_categories')->insert([
            'id' => 106,
            'name' => 'Bread',
            'description' => 'bread',
            'created_at' => '2017-11-2 1:15:50',
            'updated_at' => '2017-11-2 1:15:50'
        ]);

        DB::table('product_categories')->insert([
            'id' => 107,
            'name' => 'Ice Cream',
            'description' => 'ice cream',
            'created_at' => '2017-11-2 1:18:07',
            'updated_at' => '2017-11-2 1:18:07'
        ]);

    }
}
