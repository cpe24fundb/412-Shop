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
            'bill_id' => 6012001,
            'product_id' => 1,
            'quantity' => 1,
            'price' => 15,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11'
        ]);

        DB::table('bill_items')->insert([
            'bill_id' => 6012001,
            'product_id' => 3,
            'quantity' => 2,
            'price' => 20,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11'
        ]);

        DB::table('bill_items')->insert([
            'bill_id' => 6012002,
            'product_id' => 4,
            'quantity' => 2,
            'price' => 34,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11'
        ]);

        DB::table('bill_items')->insert([
            'bill_id' => 6012003,
            'product_id' => 5,
            'quantity' => 1,
            'price' => 15,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11'
        ]);

        DB::table('bill_items')->insert([
            'bill_id' => 6012003,
            'product_id' => 3,
            'quantity' => 1,
            'price' => 10,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11'
        ]);

        DB::table('bill_items')->insert([
            'bill_id' => 6012003,
            'product_id' => 2,
            'quantity' => 2,
            'price' => 20,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11'
        ]);

        DB::table('bill_items')->insert([
            'bill_id' => 6012004,
            'product_id' => 6,
            'quantity' => 3,
            'price' => 390,
            'created_at' => '2017-11-4 15:28:32',
            'updated_at' => '2017-11-4 15:28:32'
        ]);

        DB::table('bill_items')->insert([
            'bill_id' => 6012005,
            'product_id' => 7,
            'quantity' => 1,
            'price' => 20,
            'created_at' => '2017-11-4 15:28:32',
            'updated_at' => '2017-11-4 15:28:32'
        ]);

        DB::table('bill_items')->insert([
            'bill_id' => 6012005,
            'product_id' => 8,
            'quantity' => 1,
            'price' => 7,
            'created_at' => '2017-11-4 15:28:32',
            'updated_at' => '2017-11-4 15:28:32'
        ]);

        DB::table('bill_items')->insert([
            'bill_id' => 6012005,
            'product_id' => 9,
            'quantity' => 2,
            'price' => 10,
            'created_at' => '2017-11-4 15:28:32',
            'updated_at' => '2017-11-4 15:28:32'
        ]);

        DB::table('bill_items')->insert([
            'bill_id' => 6012006,
            'product_id' => 35,
            'quantity' => 2,
            'price' => 26,
            'created_at' => '2017-11-4 15:28:32',
            'updated_at' => '2017-11-4 15:28:32'
        ]);

        DB::table('bill_items')->insert([
            'bill_id' => 6012006,
            'product_id' => 36,
            'quantity' => 30,
            'price' => 450,
            'created_at' => '2017-11-4 15:28:32',
            'updated_at' => '2017-11-4 15:28:32'
        ]);

        

        
    }
}
