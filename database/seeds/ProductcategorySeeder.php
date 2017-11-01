<?php

use Illuminate\Database\Seeder;

class ProductcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            'id' => 101,
            'name' => 'Snack',
            'description' => 'snack',
            'created_at' => '2017-11-2 1:05:44',
            'updated_at' => '2017-11-2 1:05:44'
        ]);

        DB::table('product_categories')->insert([
            'id' => 102,
            'name' => 'Candy',
            'description' => 'candy',
            'created_at' => '2017-11-2 1:06:37',
            'updated_at' => '2017-11-2 1:06:37'
        ]);

    }
}
