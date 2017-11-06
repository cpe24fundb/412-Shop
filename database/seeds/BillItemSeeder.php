<?php

use Illuminate\Database\Seeder;

class BillItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bill_items')->delete();
        DB::table('bill_items')->insert([
            'bill_id' => 1001,
            'product_id' => 1,
            'quantity' => 1,
            'price' => 15,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11'
        ]);

        DB::table('bill_items')->insert([
            'bill_id' => 1001,
            'product_id' => 3,
            'quantity' => 2,
            'price' => 18,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11'
        ]);

        DB::table('bill_items')->insert([
            'bill_id' => 2002,
            'product_id' => 4,
            'quantity' => 2,
            'price' => 34,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11'
        ]);

        DB::table('bill_items')->insert([
            'bill_id' => 3003,
            'product_id' => 5,
            'quantity' => 1,
            'price' => 75,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11'
        ]);

        DB::table('bill_items')->insert([
            'bill_id' => 3003,
            'product_id' => 3,
            'quantity' => 1,
            'price' => 9,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11'
        ]);

        DB::table('bill_items')->insert([
            'bill_id' => 3003,
            'product_id' => 2,
            'quantity' => 2,
            'price' => 20,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11'
        ]);
    }
}
