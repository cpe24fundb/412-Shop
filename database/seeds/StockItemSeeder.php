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
        DB::table('stock_items')->delete();
        DB::table('stock_items')->insert([
            'product_id' => 1,
            'stock_id' => 1111,
            'quantity' => 30,
            'price' => 12,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 2,
            'stock_id' => 1111,
            'quantity' => 50,
            'price' => 9,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 3,
            'stock_id' => 1111,
            'quantity' => 40,
            'price' => 7,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 4,
            'stock_id' => 1111,
            'quantity' => 20,
            'price' => 15,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 5,
            'stock_id' => 1111,
            'quantity' => 50,
            'price' => 13,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 6,
            'stock_id' => 1122,
            'quantity' => 10,
            'price' => 120,
            'created_at' => '2017-11-4 11:00:11',
            'updated_at' => '2017-11-4 11:00:11'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 7,
            'stock_id' => 1122,
            'quantity' => 30,
            'price' => 18,
            'created_at' => '2017-11-4 11:00:11',
            'updated_at' => '2017-11-4 11:00:11'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 8,
            'stock_id' => 1122,
            'quantity' => 30,
            'price' => 5,
            'created_at' => '2017-11-4 11:00:11',
            'updated_at' => '2017-11-4 11:00:11'
        ]);
        
        DB::table('stock_items')->insert([
            'product_id' => 9,
            'stock_id' => 1122,
            'quantity' => 35,
            'price' => 4,
            'created_at' => '2017-11-4 11:00:11',
            'updated_at' => '2017-11-4 11:00:11'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 10,
            'stock_id' => 1122,
            'quantity' => 50,
            'price' => 4,
            'created_at' => '2017-11-4 11:00:11',
            'updated_at' => '2017-11-4 11:00:11'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 11,
            'stock_id' => 1122,
            'quantity' => 40,
            'price' => 4,
            'created_at' => '2017-11-4 11:00:11',
            'updated_at' => '2017-11-4 11:00:11'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 12,
            'stock_id' => 1122,
            'quantity' => 35,
            'price' => 4,
            'created_at' => '2017-11-4 11:00:11',
            'updated_at' => '2017-11-4 11:00:11'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 13,
            'stock_id' => 1133,
            'quantity' => 40,
            'price' => 4,
            'created_at' => '2017-11-4 15:27:43',
            'updated_at' => '2017-11-4 15:27:43'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 14,
            'stock_id' => 1133,
            'quantity' => 30,
            'price' => 17,
            'created_at' => '2017-11-4 15:27:43',
            'updated_at' => '2017-11-4 15:27:43'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 15,
            'stock_id' => 1133,
            'quantity' => 45,
            'price' => 4,
            'created_at' => '2017-11-4 15:27:43',
            'updated_at' => '2017-11-4 15:27:43'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 16,
            'stock_id' => 1133,
            'quantity' => 40,
            'price' => 4,
            'created_at' => '2017-11-4 15:27:43',
            'updated_at' => '2017-11-4 15:27:43'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 17,
            'stock_id' => 1133,
            'quantity' => 30,
            'price' => 4,
            'created_at' => '2017-11-4 15:27:43',
            'updated_at' => '2017-11-4 15:27:43'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 18,
            'stock_id' => 1133,
            'quantity' => 40,
            'price' => 4,
            'created_at' => '2017-11-4 15:27:43',
            'updated_at' => '2017-11-4 15:27:43'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 19,
            'stock_id' => 1133,
            'quantity' => 45,
            'price' => 4,
            'created_at' => '2017-11-4 15:27:43',
            'updated_at' => '2017-11-4 15:27:43'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 20,
            'stock_id' => 1133,
            'quantity' => 30,
            'price' => 4,
            'created_at' => '2017-11-4 15:27:43',
            'updated_at' => '2017-11-4 15:27:43'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 21,
            'stock_id' => 1133,
            'quantity' => 30,
            'price' => 4,
            'created_at' => '2017-11-4 15:27:43',
            'updated_at' => '2017-11-4 15:27:43'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 22,
            'stock_id' => 1133,
            'quantity' => 30,
            'price' => 4,
            'created_at' => '2017-11-4 15:27:43',
            'updated_at' => '2017-11-4 15:27:43'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 23,
            'stock_id' => 1144,
            'quantity' => 30,
            'price' => 4,
            'created_at' => '2017-11-4 16:52:06',
            'updated_at' => '2017-11-4 16:52:06'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 24,
            'stock_id' => 1144,
            'quantity' => 40,
            'price' => 4,
            'created_at' => '2017-11-4 16:52:06',
            'updated_at' => '2017-11-4 16:52:06'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 25,
            'stock_id' => 1144,
            'quantity' => 35,
            'price' => 4,
            'created_at' => '2017-11-4 16:52:06',
            'updated_at' => '2017-11-4 16:52:06'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 26,
            'stock_id' => 1155,
            'quantity' => 22,
            'price' => 10,
            'created_at' => '2017-11-4 17:38:29',
            'updated_at' => '2017-11-4 17:38:29'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 27,
            'stock_id' => 1155,
            'quantity' => 25,
            'price' => 15,
            'created_at' => '2017-11-4 17:38:29',
            'updated_at' => '2017-11-4 17:38:29'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 28,
            'stock_id' => 1155,
            'quantity' => 17,
            'price' => 8,
            'created_at' => '2017-11-4 17:38:29',
            'updated_at' => '2017-11-4 17:38:29'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 29,
            'stock_id' => 1155,
            'quantity' => 10,
            'price' => 30,
            'created_at' => '2017-11-4 17:38:29',
            'updated_at' => '2017-11-4 17:38:29'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 30,
            'stock_id' => 1155,
            'quantity' => 20,
            'price' => 8,
            'created_at' => '2017-11-4 17:38:29',
            'updated_at' => '2017-11-4 17:38:29'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 31,
            'stock_id' => 1155,
            'quantity' => 15,
            'price' => 14,
            'created_at' => '2017-11-4 17:38:29',
            'updated_at' => '2017-11-4 17:38:29'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 32,
            'stock_id' => 1166,
            'quantity' => 15,
            'price' => 8,
            'created_at' => '2017-11-4 17:38:29',
            'updated_at' => '2017-11-4 17:38:29'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 33,
            'stock_id' => 1166,
            'quantity' => 20,
            'price' => 9,
            'created_at' => '2017-11-4 17:38:29',
            'updated_at' => '2017-11-4 17:38:29'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 34,
            'stock_id' => 1166,
            'quantity' => 15,
            'price' => 14,
            'created_at' => '2017-11-4 17:38:29',
            'updated_at' => '2017-11-4 17:38:29'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 35,
            'stock_id' => 1166,
            'quantity' => 10,
            'price' => 10,
            'created_at' => '2017-11-4 17:38:29',
            'updated_at' => '2017-11-4 17:38:29'
        ]);

        DB::table('stock_items')->insert([
            'product_id' => 36,
            'stock_id' => 1166,
            'quantity' => 30,
            'price' => 13,
            'created_at' => '2017-11-4 17:38:29',
            'updated_at' => '2017-11-4 17:38:29'
        ]);

    }
}