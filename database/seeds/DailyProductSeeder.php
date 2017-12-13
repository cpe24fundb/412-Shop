<?php

use Illuminate\Database\Seeder;

class DailyProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daily_products')->delete();
        DB::table('daily_products')->insert([
            'daily_id' => 1002568,
            'product_id' => 2,
        ]);

        DB::table('daily_products')->insert([
            'daily_id' => 1002568,
            'product_id' => 3,
        ]);

        DB::table('daily_products')->insert([
            'daily_id' => 1002568,
            'product_id' => 5,
        ]);
    }
}