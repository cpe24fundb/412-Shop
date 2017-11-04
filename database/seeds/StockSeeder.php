<?php

use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->insert([
            'id' => 1,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11',
            'line_total' => 275
        ]);
    }
}
