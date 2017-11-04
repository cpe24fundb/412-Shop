<?php

use Illuminate\Database\Seeder;

class StockItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stock_items')->insert([
            'product_id' => 1,
            'stock_id' => 1111,
            'quantity' => 40,
            'price' => 480,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11',
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 2,
            'stock_id' => 1111,
            'quantity' => 55,
            'price' => 45,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11',
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 3,
            'stock_id' => 1111,
            'quantity' => 150,
            'price' => 1050,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11',
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 4,
            'stock_id' => 1111,
            'quantity' => 15,
            'price' => 210,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11',
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 5,
            'stock_id' => 1111,
            'quantity' => 10,
            'price' => 400,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11',
        ]);
    }
}